<?php
// HTTP
define('HTTP_SERVER', 'https://bordo-dev.ru/');

// HTTPS
define('HTTPS_SERVER', 'https://bordo-dev.ru/');

// DIR
define('DIR_APPLICATION', '/home/b/bordoazk/opc/public_html/catalog/');
define('DIR_SYSTEM', '/home/b/bordoazk/opc/public_html/system/');
define('DIR_IMAGE', '/home/b/bordoazk/opc/public_html/image/');
define('DIR_STORAGE', '/home/b/bordoazk/opc/storage/');
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
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'bordoazk_opencar');
define('DB_PASSWORD', 'h%xH2S1g');
define('DB_DATABASE', 'bordoazk_opencar');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');