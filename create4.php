﻿<html>
<head>
       <title>Title here!</title>
	   	<META http-equiv=content-type content="text/html; charset=utf8">
</head>
<body>
  <?php

require_once 'connection.php'; // подключаем скрипт

mysqli_query($dbcnx, "SET CHARACTER SET utf8");

 
	$fio = trim($_POST['fio']);
	//$pass = trim(md5($_POST['pass']));
	$id_tovara = trim($_POST['id_tovara']);
	$skype = trim($_POST['skype']);
	
		 
		  
		  
		  // создание строки запроса
		  $query = "INSERT INTO tovari (fio, id_tovara, 	skype)" ."VALUES('{$fio}', '{$id_tovara}', '{$skype}');";
          
		  // выполняем запрос
		   $result = mysqli_query($dbcnx, $query) or die("Ошибка " . mysqli_error($dbcnx));
		   
	
	
		  // закрываем подключение
		  mysqli_close($dbcnx);
		  if($result)
		  {
			  echo "<span style='color:blue;'>Данные добавлены</span>";
		  }
  ?><code lang="php">
  <form action="location1.php" method="get">
  <input type="submit" value="На главную"></form>
</body>
</html>