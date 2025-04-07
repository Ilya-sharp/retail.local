<?php
$cli_action = 'extension/module/retailcrm/history';
require_once('dispatch.php');

$APIKey = '976rnJ5js3WbSXbvZg8V6n5OaZN5D2L7';
$url = 'https://ikabushko.retailcrm.ru/api/v5/customers';
$options = [
    'apiKey' => $APIKey,
];

getclients($url, $options);
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