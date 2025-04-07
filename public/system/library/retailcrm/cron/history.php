<?php
$cli_action = 'extension/module/retailcrm/history';
require_once('dispatch.php');


// Подключение к базе данных OpenCart
$conn_settings = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn_settings->connect_error) {
    die("Ошибка подключения к БД: " . $conn_settings->connect_error);
}

// Получение настроек модуля
$settings = [];
$result = $conn_settings->query("
    SELECT `key`, value 
    FROM " . DB_PREFIX . "setting 
    WHERE `code` = 'module_retailcrm'
");

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $settings[$row['key']] = $row['value'];
    }
} else {
    die("Настройки модуля RetailCRM не найдены");
}

$conn_settings->close();



if (!isset($settings['module_retailcrm_apikey'])) {
    die("API ключ RetailCRM не настроен");
}

// Формирование параметров API
$APIKey = $settings['module_retailcrm_apikey'];
$url = rtrim($settings['module_retailcrm_url']);

$options = ['apiKey' => $APIKey];




getclients($url, $options);
syncOrders($url, $options);
function getclients($api, $opt) {
    // Инициализация cURL
    $ch = curl_init();
    $url = rtrim($api, '/') . '/api/v5/customers?' . http_build_query($opt);

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false // Для тестовых серверов без SSL
    ]);

    $response = curl_exec($ch);

    // Обработка ошибок cURL
    if (curl_errno($ch)) {
        error_log("CURL Error: " . curl_error($ch));
        curl_close($ch);
        return "Ошибка при запросе к API";
    }

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Проверка HTTP кода
    if ($http_code != 200) {
        error_log("API вернул код: " . $http_code);
        return "Неверный ответ от сервера";
    }

    // Декодирование JSON
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("JSON decode error: " . json_last_error_msg());
        return "Ошибка формата данных";
    }

    // Проверка наличия данных о клиентах
    if (!isset($data['customers']) || !is_array($data['customers'])) {
        error_log("Нет данных о клиентах в ответе");
        return "Нет данных для обработки";
    }

    // Подключение к БД
    $conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        error_log("DB Connection Error: " . $conn->connect_error);
        return "Ошибка подключения к базе данных";
    }

    $processed = 0;
    $errors = 0;
    foreach ($data['customers'] as $customer) {
        try {
            // Валидация данных
            if (!isset($customer['id'])) {
                throw new Exception("Отсутствует ID клиента");
            }

            // Основные поля
            $customer_id = (int)$customer['id'];
            $firstName = $conn->real_escape_string($customer['firstName'] ?? '');
            $lastName = $conn->real_escape_string($customer['lastName'] ?? '');
            $email = $conn->real_escape_string($customer['email'] ?? '');
            $phone = isset($customer['phones'][0]['number'])
                ? $conn->real_escape_string($customer['phones'][0]['number'])
                : '';
            $dateAdded = $conn->real_escape_string($customer['createdAt'] ?? date('Y-m-d H:i:s'));
            $customerGroupId = 1;

            // Кастомные поля
            $customFields = json_encode([
                'kolichestvo_ruk' => $customer['customFields']['kolichestvo_ruk'] ?? null
            ]);

            // Значения по умолчанию
            $defaults = [
                'store_id' => 0,
                'language_id' => 1,
                'fax' => '',
                'password' => 'qwerty',
                'salt' => token(9),
                'ip' => '127.0.0.1',
                'status' => 1,
                'approved' => 1,
                'safe' => 0
            ];

            // Проверка существования клиента
            $check = $conn->query("SELECT customer_id FROM " . DB_PREFIX . "customer WHERE customer_id = $customer_id");

            if ($check->num_rows > 0) {
                // Обновление данных
                $sql = "UPDATE " . DB_PREFIX . "customer SET 
                        firstname = '$firstName',
                        lastname = '$lastName',
                        email = '$email',
                        telephone = '$phone',
                        custom_field = '" . $conn->real_escape_string($customFields) . "'
                        WHERE customer_id = $customer_id";
            } else {
                // Вставка нового клиента
                $sql = "INSERT INTO " . DB_PREFIX . "customer 
                        (
                            customer_id, customer_group_id, store_id, language_id,
                            firstname, lastname, email, telephone, fax,
                            password, salt, custom_field, ip, status, token, safe, code, date_added
                        ) VALUES (
                            $customer_id, 
                            $customerGroupId, 
                            {$defaults['store_id']}, 
                            {$defaults['language_id']},
                            '$firstName', 
                            '$lastName', 
                            '$email', 
                            '$phone', 
                            '{$defaults['fax']}',
                            '{$defaults['password']}', 
                            '{$defaults['salt']}', 
                            '" . $conn->real_escape_string($customFields) . "',
                            '{$defaults['ip']}', 
                            {$defaults['status']}, 
                            {$defaults['approved']}, 
                            {$defaults['safe']}, 
                            {$defaults['safe']}, 
                            '$dateAdded'
                        )";
            }

            if (!$conn->query($sql)) {
                throw new Exception("DB Error: " . $conn->error);
            }

            $processed++;

        } catch (Exception $e) {
            $errors++;
            error_log("Ошибка обработки клиента ID {$customer['id']}: " . $e->getMessage());
            continue;
        }
    }

    $conn->close();
    return "Синхронизация завершена. Успешно: $processed, Ошибок: $errors";
}


function syncOrders($api, $opt) {
    // Инициализация cURL и получение данных
    $ch = curl_init();
    $url = rtrim($api, '/') . '/api/v5/orders?' . http_build_query($opt);

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false
    ]);

    $response = curl_exec($ch);

    // Обработка ошибок cURL
    if (curl_errno($ch)) {
        error_log("CURL Error: " . curl_error($ch));
        curl_close($ch);
        return "Ошибка при запросе к API";
    }

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code != 200) {
        error_log("API вернул код: " . $http_code);
        return "Неверный ответ от сервера";
    }

    // Декодирование JSON
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("JSON decode error: " . json_last_error_msg());
        return "Ошибка формата данных";
    }

    if (!isset($data['orders']) || !is_array($data['orders'])) {
        error_log("Нет данных о заказах в ответе");
        return "Нет данных для обработки";
    }

    // Подключение к БД
    $conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        error_log("DB Connection Error: " . $conn->connect_error);
        return "Ошибка подключения к базе данных";
    }

    $processed = 0;
    $errors = 0;

    foreach ($data['orders'] as $order) {
        try {
            // Базовые проверки
            if (!isset($order['id'], $order['externalId'])) {
                throw new Exception("Отсутствует ID или externalId заказа");
            }

            // Основные данные
            $external_id = (int)$order['externalId'];
            $order_id = (int)$order['id'];
            $customer_id = isset($order['customer']['externalId']) ? (int)$order['customer']['externalId'] : 0;

            // Данные по умолчанию
            $defaults = [
                'invoice_no' => 0,
                'invoice_prefix' => 'RC' . time(),
                'store_id' => 0,
                'store_name' => 'RetailCRM Store',
                'store_url' => $conn->real_escape_string($order['site'] ?? ''),
                'customer_group_id' => 1,
                'fax' => '',
                'payment_method' => $conn->real_escape_string($order['paymentType'] ?? 'Онлайн оплата'),
                'payment_code' => 'default',
                'shipping_method' => $conn->real_escape_string($order['delivery']['code'] ?? 'self-delivery'),
                'shipping_code' => 'self_delivery',
                'comment' => '',
                'affiliate_id' => 0,
                'commission' => 0.0000,
                'marketing_id' => 0,
                'tracking' => $conn->real_escape_string($order['trackingNumber'] ?? ''),
                'language_id' => 1,
                'currency_id' => 1,
                'currency_code' => $order['currency'] ?? 'BYN',
                'currency_value' => 1.00000000,
                'ip' => '127.0.0.1',
                'forwarded_ip' => '',
                'user_agent' => 'RetailCRM Sync',
                'accept_language' => 'ru-RU,ru;q=0.9'
            ];

            // Обработка клиента
            $customer = $order['customer'] ?? [];
            $firstname = $conn->real_escape_string($customer['firstName'] ?? '');
            $lastname = $conn->real_escape_string($customer['lastName'] ?? '');
            $email = $conn->real_escape_string($customer['email'] ?? '');
            $telephone = $conn->real_escape_string($customer['phones'][0]['number'] ?? '');

            // Адрес оплаты
            $payment = $order['paymentAddress'] ?? [];
            $payment_firstname = $conn->real_escape_string($payment['firstName'] ?? $firstname);
            $payment_lastname = $conn->real_escape_string($payment['lastName'] ?? $lastname);
            $payment_company = $conn->real_escape_string($payment['company'] ?? '');
            $payment_address_1 = $conn->real_escape_string($payment['address'] ?? '');
            $payment_city = $conn->real_escape_string($payment['city'] ?? '');
            $payment_postcode = $conn->real_escape_string($payment['postcode'] ?? '');
            $payment_country = $conn->real_escape_string($payment['country'] ?? '');
            $payment_zone = $conn->real_escape_string($payment['region'] ?? '');

            // Адрес доставки
            $delivery = $order['delivery']['address'] ?? [];
            $shipping_firstname = $conn->real_escape_string($delivery['firstName'] ?? $firstname);
            $shipping_lastname = $conn->real_escape_string($delivery['lastName'] ?? $lastname);
            $shipping_company = $conn->real_escape_string($delivery['company'] ?? '');
            $shipping_address_1 = $conn->real_escape_string($delivery['address'] ?? '');
            $shipping_city = $conn->real_escape_string($delivery['city'] ?? '');
            $shipping_postcode = $conn->real_escape_string($delivery['postcode'] ?? '');
            $shipping_country = $conn->real_escape_string($delivery['country'] ?? '');
            $shipping_zone = $conn->real_escape_string($delivery['region'] ?? '');

            // Остальные поля
            $total_sum = (float)($order['totalSumm'] ?? 0);
            $status = $conn->real_escape_string($order['status'] ?? 'new');
            $created_at = $conn->real_escape_string($order['createdAt'] ?? date('Y-m-d H:i:s'));
            $custom_fields = $conn->real_escape_string(json_encode($order['customFields'] ?? []));

            // Проверка существования заказа
            $check = $conn->query("SELECT order_id FROM " . DB_PREFIX . "order WHERE order_id = $external_id");
            if ($check === false) throw new Exception("Ошибка проверки заказа: " . $conn->error);

            // Формирование SQL
            if ($check->num_rows > 0) {
                $sql = "UPDATE " . DB_PREFIX . "order SET 
                    customer_id = $customer_id,
                    firstname = '$firstname',
                    lastname = '$lastname',
                    email = '$email',
                    telephone = '$telephone',
                    custom_field = '$custom_fields',
                    total = $total_sum,
                    order_status_id = (SELECT order_status_id FROM " . DB_PREFIX . "order_status WHERE name = '$status' LIMIT 1),
                    date_added = '$created_at',
                    date_modified = NOW()
                    WHERE order_id = $external_id";
            } else {
                $sql = "INSERT INTO " . DB_PREFIX . "order (
                    order_id, invoice_no, invoice_prefix, store_id, store_name, store_url,
                    customer_id, customer_group_id, firstname, lastname, email, telephone, fax,
                    custom_field, payment_firstname, payment_lastname, payment_company,
                    payment_address_1, payment_address_2, payment_city, payment_postcode,
                    payment_country, payment_country_id, payment_zone, payment_zone_id,
                    payment_address_format, payment_custom_field, payment_method, payment_code,
                    shipping_firstname, shipping_lastname, shipping_company, shipping_address_1,
                    shipping_address_2, shipping_city, shipping_postcode, shipping_country,
                    shipping_country_id, shipping_zone, shipping_zone_id, shipping_address_format,
                    shipping_custom_field, shipping_method, shipping_code, comment, total,
                    order_status_id, affiliate_id, commission, marketing_id, tracking,
                    language_id, currency_id, currency_code, currency_value, ip, forwarded_ip,
                    user_agent, accept_language, date_added, date_modified
                ) VALUES (
                    $external_id,
                    {$defaults['invoice_no']},
                    '{$defaults['invoice_prefix']}',
                    {$defaults['store_id']},
                    '{$defaults['store_name']}',
                    '{$defaults['store_url']}',
                    $customer_id,
                    {$defaults['customer_group_id']},
                    '$firstname',
                    '$lastname',
                    '$email',
                    '$telephone',
                    '{$defaults['fax']}',
                    '$custom_fields',
                    '$payment_firstname',
                    '$payment_lastname',
                    '$payment_company',
                    '$payment_address_1',
                    '',
                    '$payment_city',
                    '$payment_postcode',
                    '$payment_country',
                    0,
                    '$payment_zone',
                    0,
                    '',
                    '',
                    '{$defaults['payment_method']}',
                    '{$defaults['payment_code']}',
                    '$shipping_firstname',
                    '$shipping_lastname',
                    '$shipping_company',
                    '$shipping_address_1',
                    '',
                    '$shipping_city',
                    '$shipping_postcode',
                    '$shipping_country',
                    0,
                    '$shipping_zone',
                    0,
                    '',
                    '',
                    '{$defaults['shipping_method']}',
                    '{$defaults['shipping_code']}',
                    '{$defaults['comment']}',
                    $total_sum,
                    (SELECT order_status_id FROM " . DB_PREFIX . "order_status WHERE name = '$status' LIMIT 1),
                    {$defaults['affiliate_id']},
                    {$defaults['commission']},
                    {$defaults['marketing_id']},
                    '{$defaults['tracking']}',
                    {$defaults['language_id']},
                    {$defaults['currency_id']},
                    '{$defaults['currency_code']}',
                    {$defaults['currency_value']},
                    '{$defaults['ip']}',
                    '{$defaults['forwarded_ip']}',
                    '{$defaults['user_agent']}',
                    '{$defaults['accept_language']}',
                    '$created_at',
                    NOW()
                )";
            }

            if (!$conn->query($sql)) {
                throw new Exception("DB Error: " . $conn->error);
            }

            // Обработка товаров (оставить без изменений)
            // ... код обработки товаров ...

            $processed++;
        } catch (Exception $e) {
            $errors++;
            error_log("Ошибка обработки заказа ID {$order['id']}: " . $e->getMessage());
        }
    }

    $conn->close();
    return "Синхронизация заказов завершена. Успешно: $processed, Ошибок: $errors";
}