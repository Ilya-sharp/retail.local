<?php
// HTTP
define('HTTP_SERVER', 'https://retail.local/');

// HTTPS
define('HTTPS_SERVER', 'https://retail.local/');

// DIR
define('DIR_APPLICATION', 'D:/OSPanel/home/retail.local/public/catalog/');
define('DIR_SYSTEM', 'D:/OSPanel/home/retail.local/public/system/');
define('DIR_IMAGE', 'D:/OSPanel/home/retail.local/public/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'MySQL-8.2');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'loca');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');