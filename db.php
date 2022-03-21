
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cafe');

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($mysql->connect_errno) exit('Ошибка подключения к БД');
$mysql->set_charset('utf8');
$mysql->close();
?>