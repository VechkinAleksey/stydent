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
		
		
			<div id="main">
		<div class="banner">&nbsp;</div>
			       <div id="content">
				        <div class="content">
								<ul>
									<li>
										
										<h2>Клиенты</h2>
										<p>Наши клиенты:</a></p>

									</li>
									
									
								</ul>
						</div>
						
					 
				   </div>
			</div>
		<?php

	$db_host ='localhost';
	$db_name ='rog1';
	$db_username ='root';
	$db_password = '';
	$db_table_to_show = 'host';
	
	
	$connect_to_db = mysql_connect($db_host, $db_username, $db_password)
	or die("Could not connect: " .mysql_error());
	
	mysql_select_db($db_name, $connect_to_db)
	or die("Could not select DB: " .mysql_error());
	
	mysql_query('set character_set_client="utf8"'); 
    mysql_query('set character_set_results="utf8"');
	mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER SET utf8");
	
	$qr_result = mysql_query("SELECT * FROM `host` ORDER BY `name` ASC")

	or die(mysql_error());
	
	echo '<table align="center" width="900" height="300" <table border="1"> ';
		echo '<thead>';
		echo '<tr>';

		echo '<th>	id </th>';
		echo '<th>	Название </th>';
		echo '<th>	Телефон </th>';
			echo '<th>	Адрес </th>';
					
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
	while($data = mysql_fetch_array($qr_result)){
		echo '<tr>';

		echo '<td>' . $data['id'] . '</td>';
	    echo '<td>' . $data['name'] . '</td>';
		echo '<td>' . $data['tel'] . '</td>';
		echo '<td>' . $data['adress'] . '</td>';
		echo '</tr>';
	}

	echo '</tbody>';
	echo '</table>';
	
	mysql_close($connect_to_db);
?>
		
		
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