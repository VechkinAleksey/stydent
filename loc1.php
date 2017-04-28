<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<title>Музыкальный магазин МузТорг</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/fc.css" type="text/css" media="all" />
<!--	<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" /> -->
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<link rel="shortcut icon" href="css/images/logod.ico" />
	<!-- <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script> 
	<script type="text/javascript" src="js/func.js"></script> -->
	<script type="text/javascript" src="js/fc.js"></script>
	
		
	
</head>
<body>
<div class="shell">
	<div class="border">
		<div id="header">
		
		
			<img src="css/images/logo4.png" style="position:absolute; left: 12px;top:2px;bottom:0px;right:0px name="send" border="0"/>
			
			<div class="socials right">
			

			
			<?php
			
			
				//require_once 'sessia.php';
			require_once 'connection.php';
			
			
			if (!empty($_GET['Nick_Name'])){
			
			$user_id='';
			$login='';
			
			
mysqli_query($dbcnx, "SET CHARACTER SET utf8");

$login = $_GET['Nick_Name'];


	$query="SELECT * FROM users ";
	$result=mysqli_query($dbcnx, $query) or die("Ошибка " . mysqli_error($dbcnx));
   $row = mysqli_fetch_array( $result);
   
$user_id=$row["id"];
  $_SESSION['id'] = $user_id ;
  
  $login = $row['Nick_Name'];
$_SESSION['Nick_Name'] = $login ;


//echo $user_id ; 
		//	echo $login ; 
		
		
		$login = $_GET['Nick_Name'];
//echo "Добро пожаловать, {$login}";
		
			} else {
// На стартовую
 print( '<SCRIPT>
	alert("Что то пошло не так!"); </SCRIPT>' );
print( '<SCRIPT>top.location.href="index.php";</SCRIPT>' );
}
		?>	
		
			
			
		   <TR>
	  <TD>Добро пожаловать на сайт!</TD>

	 </TD>
    </TR>
   

			<center>
 <form name="indexform" action="login.php" method="POST" onSubmit="return validate_form ( );">
    <TABLE width= 200px cellSpacing=-300px cellPadding=10px  border=0px  style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
	
    <TR>
	<TD>Логин: 	
	<div style="position:absolute; left:848px;top:46px;bottom:0px;right:0px;">
	<?php echo  "{$login}" ;  ?> </div>
	</TD>

	 </TABLE>
	 	<div style="position:absolute; left:610px;top:76px;bottom:0px;right:0px;">
	 <td>

<a href="index.php?exit">Выход</a>		 </td></div>
		 <tr>
</FORM>

			</center>
			


<?php if (isset($_SESSION['login']) && isset($_SESSION['id'])) // если в сессии загружены логин и id
{
echo '<div align="center"><a href="index.php?exit">Выход</a></div>'; // Выводим нашу ссылку выхода
} ?>

				
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
			
										
		
		<div id="navigation">
			<ul>
			    <li><a href="loc1.php" class="active">Услуги и товары</a></li>
			  
				</ul>
					<div class="cl">&nbsp;</div>
					<h2>Услуги</h2>
										<p>Заявка на услугу:</a></p>
			
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

	
	$qr_result = mysql_query("SELECT * FROM `yslygi`")

	or die(mysql_error());
	
	echo '<table align="center" width="900" height="300"   <table border="1"> ';
		echo '<thead>';

		echo '<tr>';

		echo '<th> id_номер</th>';
		echo '<th>	ФИО </th>';
		echo '<th>	id_услуги </th>';
		echo '<th>	skype </th>';
					
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
	while($data = mysql_fetch_array($qr_result)){
		echo '<tr>';
		
		
				echo '<br>';

		echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['fio'] . '</td>';
		echo '<td>' . $data['id_yslygi'] . '</td>';
		echo '<td>' . $data['skype'] . '</td>';
		echo '</tr>';
	}

	echo '</tbody>';
	echo '</table>';
	
	mysql_close($connect_to_db);
?>
		
		<h2>Товары</h2>
										<p>Заявка на товары:</a></p>
	
	
	
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

	
	$qr_result = mysql_query("SELECT * FROM `tovari`")

	or die(mysql_error());
	
	echo '<table align="center" width="900" height="300"   <table border="1"> ';
		echo '<thead>';

		echo '<tr>';

		echo '<th> id_номер</th>';
		echo '<th>	ФИО </th>';
		echo '<th>	id_товара </th>';
		echo '<th>	skype </th>';
					
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
	while($data = mysql_fetch_array($qr_result)){
		echo '<tr>';
		
		
				echo '<br>';

		echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['fio'] . '</td>';
		echo '<td>' . $data['id_tovara'] . '</td>';
		echo '<td>' . $data['skype'] . '</td>';
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
			     <li><a href="loc1.php">Главная</a></li>
			    <li><a href="loc2.php">О нас</a></li>
			    <li><a href="loc3.php">Услуги</a></li>
			    <li><a href="loc4.php">Товары</a></li>
			    <li><a href="loc5.php">Отзывы</a></li>
			    <li> <a href="loc6.php">Контакты</a></li>
					  <li class="last">    <li><a href="https://vk.com/vlexan">Vkontakte</a>
					  <img src="images/znashok1.jpg" alt="" /></li>
				
			</ul>
		</div>
	<p class="copy right">МузТорг &copy; ! МузТорг 2017 | Сайт с применением CSS &amp; HTML. Сделал  <a href="https://vk.com/vlexan" target="_blank" title="The Sweetest CSS Templates WorldWide">Алексей</a></p>
		<div class="cl">&nbsp;</div>
		<div class="cl">&nbsp;</div>
					<div class="socials right">
			
		</div>
	</div>
</div>
</body>
</html>