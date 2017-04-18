<?php
$host = 'localhost'; // адрес сервера 
$database = 'rog1'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$dbcnx = mysqli_connect($host, $user, $password);
mysqli_select_db($dbcnx, $database);

?>