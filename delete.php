﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
		<title>Музыкальный магазин МузТорг</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<link rel="shortcut icon" href="css/images/logod.ico" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
	<script type="text/javascript" src="js/func.js"></script>
</head>
<body>
<div class="shell">
	<div class="border">
		<div id="header">
				<img src="css/images/logo3.png" style="position:absolute; left: 12px;top:2px;bottom:0px;right:0px name="send" border="0"/>
			<div class="socials right">
				<ul>
				    <li><a href="#" class="rss">RSS</a></li>
				    <li><a href="#" class="fb">Facebook</a></li>
				    <li class="last"><a href="#" class="twit">Twitter</a></li>
				</ul>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
		<div id="navigation">
			<ul>
			     <li><a href="index.php">Главная</a></li>
			    <li><a href="about.php">О магазине</a></li>
			    <li><a href="services.php">Услуги</a></li>
			    <li><a href="tovar.php">Товары</a></li>
			    <li><a href="otzivi.php" class="active">Отзывы</a></li>
			    <li><a href="kontakti.php">Контакты</a></li>
			</ul>
			<div class="cl">&nbsp;</div>
		</div>
		
		
			  <style>
   body {
    background-image: url(images/creat.jpg); 
   }
  </style>
<h2>Удалить клиента </h2>
<form method="POST">



<p>Введите id клиента:<br> 
<input type="text"  name="id" /></p>


<input type="submit" value="Удалить">
</form>
		<?php
require_once 'connection.php'; // подключаем скрипт

 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
		
     mysql_query('set character_set_client="utf8"'); 
    mysql_query('set character_set_results="utf8"');
	mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER SET utf8");

    // экранирования символов для mysql
	$id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));



    // создание строки запроса
    $query = "DELETE FROM `host` WHERE id = '$id'";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
   
    // закрываем подключение
    mysqli_close($link);
?>
		
		<code lang="php">
<form action="otzivi.php" method="get">
	<input type="submit" value="Назад"></form>
		
		
			<div class="shadow-l"></div>
		<div class="shadow-r"></div>
		
	
		<div class="shadow-b"></div>
	</div>

		
		
		
		
	
	<div id="footer">
		<div class="footer-nav left">
			<ul>
			   <li><a href="#">Главная</a></li>
			    <li><a href="#">О нас</a></li>
			    <li><a href="#">Услуги</a></li>
			    <li><a href="#">Товары</a></li>
			    <li><a href="#">Отзывы</a></li>
			    <li class="last"><a href="#">Контакты</a></li>
			</ul>
		</div>
	<p class="copy right">МузТорг &copy; ! МузТорг 2010 | Сайт с применением CSS &amp; HTML. Сделал  <a href="https://vk.com/vlexan" target="_blank" title="The Sweetest CSS Templates WorldWide">Алексей</a></p>
		<div class="cl">&nbsp;</div>
	</div>
</div>
</body>
</html>