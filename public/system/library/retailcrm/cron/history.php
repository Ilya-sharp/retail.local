<?php
$cli_action = 'extension/module/retailcrm/history';
require_once('dispatch.php');

$APIKey = '976rnJ5js3WbSXbvZg8V6n5OaZN5D2L7';
$url = 'https://ikabushko.retailcrm.ru/';
$options = [
    'apiKey' => $APIKey,
];

getclients($url, $options);
getOrders($url, $options);
function getclients($url, $opt) {
    // Инициализация cURL
    $ch = curl_init();
    $url = rtrim($url, '/') . '/api/v5/customers?' . http_build_query($opt);

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

            // Основные поля с проверкой
            $customer_id = (int)$customer['id'];
            $firstName = $conn->real_escape_string($customer['firstName'] ?? '');
            $lastName = $conn->real_escape_string($customer['lastName'] ?? '');
            $email = $conn->real_escape_string($customer['email'] ?? '');
            $phone = isset($customer['phones'][0]['number'])
                ? $conn->real_escape_string($customer['phones'][0]['number'])
                : '';
            $dateAdded = $customer['createdAt'] ?? date('Y-m-d H:i:s');
            $customerGroupId = 1; // Стандартная группа покупателей

            // Кастомные поля
            $customFields = json_encode([
                '1' => $customer['customFields']['kolichestvo_ruk'] ?? null
            ]);

            // Проверяем существование клиента
            $check = $conn->query("SELECT customer_id FROM " . DB_PREFIX . "customer WHERE customer_id = $customer_id");

            if ($check->num_rows > 0) {
                // Обновляем существующего клиента
                $sql = "UPDATE " . DB_PREFIX . "customer SET 
                        customer_group_id = $customerGroupId,
                        firstname = '$firstName',
                        lastname = '$lastName',
                        email = '$email',
                        telephone = '$phone',
                        date_added = '$dateAdded',
                        custom_field = '" . $conn->real_escape_string($customFields) . "'
                        WHERE customer_id = $customer_id";
            } else {
                // Вставляем нового клиента
                $sql = "INSERT INTO " . DB_PREFIX . "customer 
                        (customer_id, customer_group_id, firstname, lastname, email, telephone, date_added, custom_field) 
                        VALUES (
                            $customer_id,
                            $customerGroupId,
                            '$firstName',
                            '$lastName',
                            '$email',
                            '$phone',
                            '$dateAdded',
                            '" . $conn->real_escape_string($customFields) . "'
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


function getOrders($url, $opt) {
    // Получаем данные заказов из retailCRM
    $ch = curl_init();
    $url = rtrim($url, '/') . '/api/v5/orders?' . http_build_query($opt);

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false // Для тестовых серверов без SSL
    ]);
    $response = curl_exec($ch);
    $data = json_decode($response, true);
    curl_close($ch);

    // Проверяем, что данные заказов получены
    if (!isset($data['orders']) || !is_array($data['orders'])) {
        error_log("Нет данных о заказах в ответе API");
        echo "Нет данных о заказах для обработки.";
        return;
    }

    $conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    $processedOrders = 0;

    foreach ($data['orders'] as $order) {
        try {
            // Основные данные заказа
            $order_id = $order['id'];
            $order_status = $order['status'] ?? '';
            $delivery_date = $order['delivery']['date'] ?? null;
            $track_number = $order['customFields']['trek_nomer'] ?? ''; // Получаем trackNumber из delivery.code
            $comment = $order['customer']['comment'] ?? '';
            $phone = $order['phone'] ?? ''; // Получаем phone

            // Добавляем дату доставки и трек-номер к комментарию
            $comment .= " Дата доставки: " . ($delivery_date ?? 'не указана');
            $comment .= " Track-номер: " . ($track_number ?? 'не указан');

            // Кастомные поля заказа
            $custom_fields = json_encode([
                'delivery_date' => $delivery_date,
                'track_number' => $track_number,
                'phone' => $phone // Добавляем телефон
            ]);

            // Проверяем существование заказа
            $stmt_check = $conn->prepare("SELECT order_id FROM " . DB_PREFIX . "order WHERE order_id = ?");
            $stmt_check->bind_param('i', $order_id);
            $stmt_check->execute();
            $exists = $stmt_check->get_result()->num_rows > 0;
            $stmt_check->close();

            if ($exists) {
                // Обновляем существующий заказ
                $stmt = $conn->prepare("
                    UPDATE " . DB_PREFIX . "order SET 
                        order_status_id = ?,
                        custom_field = ?,
                        comment = ?
                    WHERE order_id = ?
                ");

                // Получаем ID статуса заказа в OpenCart по коду статуса из retailCRM
                $status_id = getOrderStatusId($conn, $order_status);

                $stmt->bind_param(
                    'issi',
                    $status_id,
                    $custom_fields,
                    $comment,
                    $order_id
                );
            } else {
                // Создаем новый заказ (упрощенная версия)
                $customer_id = $order['customer']['id'] ?? 0;
                $firstname = $order['customer']['firstName'];
                $lastname = $order['customer']['lastName'] ;
                $email = $order['customer']['email'];
                $telephone = $order['customer']['phones'][0]['number'];
                $total = $order['totalSumm'] ?? 0;
                $currency = $order['currency'] ?? 'RUB';
                $date_added = $order['createdAt'] ?? date('Y-m-d H:i:s');
                $invoice_prefix=$data['customFields']['trek_nomer']?? 1;
                $storeName = $order['shipmentStore'] ?? 'aaa';
                $store_url='lolo';
                $status_id = getOrderStatusId($conn, $order_status);
                $fax='ere';

                $stmt = $conn->prepare("
                    INSERT INTO " . DB_PREFIX . "order (
                        order_id, customer_id, firstname, lastname, email, telephone, 
                        total, currency_code, date_added, order_status_id, custom_field, comment, invoice_prefix, store_name,store_url,
                        fax, payment_firstname, payment_lastname
                    ) VALUES (
                        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,? 
                    )
                ");

                $stmt->bind_param(
                    'iissssdssissssssss',
                    $order_id,
                    $customer_id,
                    $firstname,
                    $lastname,
                    $email,
                    $telephone,
                    $total,
                    $currency,
                    $date_added,
                    $status_id,
                    $custom_fields,
                    $comment,
                    $invoice_prefix,
                    $storeName,
                    $store_url,
                    $fax,
                    $firstname,
                    $lastname,
                );
            }

            if (!$stmt->execute()) {
                error_log("Ошибка при обработке заказа ID: " . $order_id . " - " . $stmt->error);
            }
            $stmt->close();

            // Обработка товаров в заказе
            if (!empty($order['items'])) {
                $conn->query("DELETE FROM " . DB_PREFIX . "order_product WHERE order_id = " . (int)$order_id);

                foreach ($order['items'] as $item) {
                    $product_id = $item['offer']['externalId'] ?? 0;
                    $name = $item['offer']['name'] ?? '';
                    $quantity = $item['quantity'] ?? 1;
                    $price = $item['initialPrice'] ?? 0;
                    $model = $item['offer']['model'] ?? '';

                    $stmt_product = $conn->prepare("
                        INSERT INTO " . DB_PREFIX . "order_product (
                            order_id, product_id, name, quantity, price, model, reward
                        ) VALUES (?, ?, ?, ?, ?,?,1)
                    ");

                    $stmt_product->bind_param(
                        'iisids',
                        $order_id,
                        $product_id,
                        $name,
                        $quantity,
                        $price,
                        $model
                    );

                    if (!$stmt_product->execute()) {
                        error_log("Ошибка при добавлении товара в заказ: " . $stmt_product->error);
                    }
                    $stmt_product->close();
                }
            }
            $processedOrders++;

        } catch (Exception $e) {
            error_log("Ошибка при обработке заказа: " . $e->getMessage());
            continue;
        }
    }

    $conn->close();
    echo "Синхронизация заказов завершена. Обработано: " . $processedOrders . " заказов";
}

// Вспомогательная функция для получения ID статуса заказа в OpenCart
function getOrderStatusId($conn, $crm_status_code) {
    // Замените этот код на реальный запрос к вашей базе данных OpenCart
    // для получения ID статуса заказа по коду статуса из retailCRM
    // Пример:
    $stmt = $conn->prepare("SELECT order_status_id FROM " . DB_PREFIX . "order_status WHERE name = ?");
    $stmt->bind_param('s', $crm_status_code);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        return $row['order_status_id'];
    } else {
        return 1; // Статус по умолчанию (например, "Pending")
    }
    $stmt->close();
}
