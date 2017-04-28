<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			<img src="css/images/logo4.png" style="position:absolute; left: 12px;top:2px;bottom:0px;right:0px name="send" border="0"/>
			<div class="socials right">
				<ul>
				    <li class="last">Vkontakte</li>	
				  	<a href="https://vk.com/vlexan"><img src="images/znashok1.jpg" alt="" /></a>
										<h4>
<p align="right"> <li class="last">Для покупки нужно зарегестрироваться!</p></h4>
			<p align="right">	<a href="#" class="more"> <li class="last">Эта информация на данный момент актуальна</p></a>
				</ul>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
			<div id="navigation">
			<ul>
			    <li><a href="index.php" >Главная</a></li>
			    <li><a href="about.php">О магазине</a></li>
			    <li><a href="services.php" class="active">Услуги</a></li>
			    <li><a href="tovar.php">Товары</a></li>
			    <li><a href="otzivi.php">Отзывы</a></li>
			    <li><a href="kontakti.php">Контакты</a></li>
				</ul>
					<div class="cl">&nbsp;</div>
			
		</div>
		
					
		<div id="navigation">
			<ul>
				      <li><a href="regestrasia.php">Регистрация</a></li>
			</ul>
			<div class="cl">&nbsp;</div>
			
		</div>
		
		
			<div id="main">
			<div class="banner">&nbsp;</div>
			       <div id="content">
				        <div class="content">
								<ul>
									<li>
										
										<h2>Услуги</h2>
										<p>Наши услуги и цены:</a></p>
										
										

					<code lang="php">
					<form action="services2.php" method="get">
				
					<input type="submit" value="Сортировка по возрастанию цены"></form>
					
						<form action="services3.php" method="get">
					<input type="submit" value="Сортировка по убыванию цены"></form>

	
									</li>
									
									
								</ul>
						</div>
						
			</div>

		<?php
$db_host ='localhost';
	$db_name ='rog1';
	$db_username ='root';
	$db_password = '';
	$db_table_to_show = 'services';
	
	
	$connect_to_db = mysql_connect($db_host, $db_username, $db_password)
	or die("Could not connect: " .mysql_error());
	
	mysql_select_db($db_name, $connect_to_db)
	or die("Could not select DB: " .mysql_error());
	
	
		mysql_query('set character_set_client="utf8"'); 
    mysql_query('set character_set_results="utf8"');
	mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER SET utf8");

	
	$qr_result = mysql_query("SELECT * FROM `services`")

	or die(mysql_error());
	
	echo '<table align="center" width="900" height="300"   <table border="1"> ';
		echo '<thead>';

		echo '<tr>';

		echo '<th>	Номер услуги </th>';
		echo '<th>	Цена услуги(руб) </th>';
		echo '<th>	Наименование услуги </th>';
		
					
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
	while($data = mysql_fetch_array($qr_result)){
		echo '<tr>';

		echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['cost'] . '</td>';
		echo '<td>' . $data['Name'] . '</td>';
		echo '</tr>';
	}

	echo '</tbody>';
	echo '</table>';
	
	mysql_close($connect_to_db);
?>
	<center>
		<h2>Изображение услуг</h2>
					<p>Краткое описание:</a></p>
					</center>
					
					<center>
					<table>
  <colgroup>
    <col span="2" style="background:Khaki">
	<!-- С помощью этой конструкции задаем цвет фона для первых двух столбцов таблицы-->
    <col style="background-color:LightCyan"><!-- Задаем цвет фона для следующего (одного) столбца таблицы-->
  </colgroup>
  <tr>
    <th>№ п/п</th>
    <th>Наименование</th>
    <th>Изображение</th>
	    <th bgcolor="#ffca86">Описание</th>
  </tr>


  <tr>
    <td>1</td>
    <td>Проказник скоморох</td>
    <td><img src="images/file_VmqdC2Dixv4EeOIbq7Vi.jpg" alt="" /></td>
<td bgcolor="#f5eeb5">Второй студийный альбом 
российской рок-группы «Король и Шут», записанный и выпущенный в 1997 году.</td>
  </tr>
  <tr>
    <td>2</td>
    <td>TODD</td>
     <td><img src="images/todd1.jpg" alt="" /></td>
	 <td bgcolor="#f5eeb5">Одиннадцатый студийный альбом российской рок-группы «Король и Шут».</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Собрание</td>
     <td><img src="images/sobranya1.jpg" alt="" /></td>
	  <td bgcolor="#f5eeb5">Сборник композиций российской панк-рок-группы «Король и Шут», выпущенный 1 марта 2001 года к десятилетию группы. Состоит из песен прошлых альбомов.</td>
  </tr>
  <tr>
    <td>4</td>
    <td>	Мёртвый анархист</td>
    <td><img src="images/anarxist1.jpg" alt="" /></td>
	 <td bgcolor="#f5eeb5">Второй концертный альбом российской панк-рок-группы «Король и Шут». </td>
  </tr>
</table>
		</center>
		
			<div class="shadow-l"></div>
		<div class="shadow-r"></div>
		
	
		<div class="shadow-b"></div>
	</div>

		
	
	<div id="footer">
		<div class="footer-nav left">
			<ul>
			     <li><a href="index.php">Главная</a></li>
			    <li><a href="about.php">О нас</a></li>
			    <li><a href="services.php">Услуги</a></li>
			    <li><a href="tovar.php">Товары</a></li>
			    <li><a href="otzivi.php">Отзывы</a></li>
			    <li class="last"><a href="kontakti.php">Контакты</a></li>
			</ul>
		</div>
		
			

		<p class="copy right">МузТорг &copy; ! МузТорг 2017 | Сайт с применением CSS &amp; HTML. Сделал  <a href="https://vk.com/vlexan" target="_blank" title="The Sweetest CSS Templates WorldWide">Алексей</a></p>
		<div class="cl">&nbsp;</div>
	</div>

</body>
</html>