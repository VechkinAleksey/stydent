<!DOCTYPE html>
<html>
<head>
<title>Music Shop</title>
</head>
<body>
  <style>
   body {
    background-image: url(images/creat.jpg); 
   }
  </style>
<h2>Добавить нового сотрудника </h2>
<form method="POST">



<p>Введите код сотрудника:<br> 
<input type="text"  name="id" /></p>

<p>Введите ФИО:<br> 
<input type="text"  name="фио" /></p>

<p>Введите должность:<br> 
<input type="text"  name="должность" /></p>

<p>Введите стаж:<br> 
<input type="text"  name="стаж" /></p>


<input type="submit" value="Добавить">
</form>
<?php
require_once 'connection.php'; // подключаем скрипт
 
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
	$id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $фио = htmlentities(mysqli_real_escape_string($link, $_POST['фио']));
    $должность = htmlentities(mysqli_real_escape_string($link, $_POST['должность'])); 
	$стаж = htmlentities(mysqli_real_escape_string($link, $_POST['стаж'])); 

$result =	 mysqli_query($link, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'"); 
$result =mysqli_query($link, "SET CHARACTER SET 'utf8'");
$result =mysqli_query($link, "set characters_set_client=’utf8′");
$result =mysqli_query($link, "set characters_set_results=’utf8′");
$result =mysqli_query($link, "set collation_connection=’utf8_general_ci’");

    // создание строки запроса
	if ($id > 0)
	{		
    $query ="INSERT INTO worker(`id`, `fio`, `post`, `experience`) VALUES('$id','$фио','$должность', '$стаж')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
   $query = "";
	}
    // закрываем подключение
    mysqli_close($link);

?>
<code lang="php">
<a href="worker2.php">Назад</a>
</body>
</html>