<! СКРИПТ: СКРИПТ ПРОВЕРКИ РЕГЕСТРАЦИОННОЙ ФОРМЫ>
<html>
<head>
       <title>Title here!</title>
	   	<META http-equiv=content-type content="text/html; charset=utf8">
</head>
<body>
  <?php

require_once 'connection.php'; // подключаем скрипт

mysqli_query($dbcnx, "SET CHARACTER SET utf8");

 
	$nickname = trim($_POST['nickname']);
	//$pass = trim(md5($_POST['pass']));
	$pass = trim($_POST['pass']);
	$fio = trim($_POST['fio']);
	$email = trim($_POST['email']);
	//$date = time();
	$id_dates = date("Y-m-d H:i:s");
	$year = trim($_POST['year']);
	$month = trim($_POST['month']);
	$day = trim($_POST['day']);
	$date = $year."-".$month."-".$day;
	$answer = trim($_POST['answer']);
	$gender = trim($_POST['gender']);
		 if ($gender=='Мужской'){
         $gender = 1;
         }else{
         $gender = 2;
         }
	$city   = trim($_POST['city']);
		  
		 
		  
		  
		  // создание строки запроса
		  $query = "INSERT INTO users (Nick_Name, User_Pass, 	User_Email, Full_Name, Security_Answer, User_Gender, User_City, User_Birth_Day, Character_Birth_Day)" ."VALUES('{$nickname}', '{$pass}', '{$email}', '{$fio}', '{$answer}', '{$gender}', '{$city}', '{$date}', '{$id_dates}');";
          
		  // выполняем запрос
		   $result = mysqli_query($dbcnx, $query) or die("Ошибка " . mysqli_error($dbcnx));
		   
	
	
		  // закрываем подключение
		  mysqli_close($dbcnx);
		  if($result)
		  {
			  echo "<span style='color:blue;'>Данные добавлены</span>";
		  }
  ?><code lang="php">
  <form action="index.php" method="get">
  <input type="submit" value="На главную"></form>
</body>
</html>
