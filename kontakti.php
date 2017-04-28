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
	
					<script>
function feedbackSubmit(){

       alert( 'Добавить сотрудника может только администратор' );
	   
	    document.kontakti.submit();
}

</script>
	
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
<p align="right"> <li class="last">Зарегестрируйтесь для связи с сотрудниками!</p></h4>
			<p align="right">	<a href="#" class="more"> <li class="last">Эта информация на данный момент актуальна</p></a>
				</ul>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
		<div id="navigation">
			<ul>
			    <li><a href="index.php" >Главная</a></li>
			    <li><a href="about.php">О магазине</a></li>
			    <li><a href="services.php">Услуги</a></li>
			    <li><a href="tovar.php">Товары</a></li>
			    <li><a href="otzivi.php">Отзывы</a></li>
			    <li><a href="kontakti.php" class="active">Контакты</a></li>
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
										
										<h2>Сотрудники</h2>
										<p>Наши Сотрудники:</a></p>
									</li>
				
										<form name=kontakti  action="kontakti.php"  method="get" method=POST onSubmit="feedbackSubmit()">
			
									<input type="submit" value="Добавить сотрудника" onClick="feedbackSubmit()"></form>
									
								</ul>
						</div>
												</div>
					 

		<?php
$db_host ='localhost';
	$db_name ='rog1'; // название своей бд
	$db_username ='root';
	$db_password = '';
	$db_table_to_show = 'worker';
	
	
	$connect_to_db = mysql_connect($db_host, $db_username, $db_password)
	or die("Could not connect: " .mysql_error());
	
	mysql_select_db($db_name, $connect_to_db)
	or die("Could not select DB: " .mysql_error());
	
	mysql_query('set character_set_client="utf8"'); 
    mysql_query('set character_set_results="utf8"');
	
	$qr_result = mysql_query("SELECT * FROM `worker`")

	or die(mysql_error());
	
	echo '<table align="center" width="900" height="300" <table border="1"> ';
		echo '<thead>';
		echo '<tr>';

		echo '<th>	ID </th>';
		echo '<th>	ФИО </th>';
		echo '<th>	Должность </th>';
		echo '<th>	Стаж(лет) </th>';
					
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
	while($data = mysql_fetch_array($qr_result)){
		echo '<tr>';

		echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['FIO'] . '</td>';
		echo '<td>' . $data['post'] . '</td>';
		echo '<td>' . $data['experience'] . '</td>';

		echo '</tr>';

	}

	echo '</tbody>';
	echo '</table>';
	
	mysql_close($connect_to_db);
?>
		<center>
		<h2>Наши сотрудники</h2>
					<p>Ответственность, целеустремлённость и надёжность:</a></p>
				
  <tr>
		<img src="images/personal.jpg" alt="" />  </tr>
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