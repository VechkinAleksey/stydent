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

       alert( 'Удалить клиента может только администратор' );
	   
	    document.otzivi.submit();
}

</script>
	
</head>
<body>
<div class="shell">
	<div class="border">
		<div id="header">
				<img src="css/images/logo4.png" style="position:absolute; left: 12px;top:2px;bottom:0px;right:0px name="send" border="0"/>
			
			<?php
			
			// session_start(); 
			
			require_once 'connection.php';
			
			
	if (!empty($_GET['Nick_Name'])){
			
		//	$user_id='';
	//		$login='';
			
			
//mysqli_query($dbcnx, "SET CHARACTER SET utf8");

//$login = $_GET['Nick_Name'];

$logins = $_GET['Nick_Name'];
$_SESSION['Nick_Name']=$logins;
//$id = $_GET['id'];
	$abs=$logins;
//  $ar[] = $logins['Nick_Name'];    

//$f['Nick_Name'] = $logins ;

//echo "Добро пожаловать, {$login}";
	 //echo "Ваш id = ['USER_ID']";

	 	//  $_SESSION['USER_ID'] ;
	  //$user_id	=  $_SESSION['USER_ID'];
//echo "Ваш id ".$_SESSION['USER_ID'];
		} 	
	 else if(isset($_POST['index'])){
			$logins = $_GET['Nick_Name'];
			$abs=$logins;
			 // $ar[] = $logins['Nick_Name'];    
			 }
//echo "Добро пожаловать, {$login}";
		
			 
			
			
		?>	

		<TR>
		<div style="position:absolute; left:765px;top:26px;bottom:0px;right:0px;">
	  <TD>Добро пожаловать на сайт!</TD>	</div>

	 </TD>
    </TR>
   
<center>
 <form name="indexform" action="login.php" method="POST" onSubmit="return validate_form ( );">
 <div style="position:absolute; left:748px;top:46px;bottom:0px;right:0px;">
    <TABLE width= 200px cellSpacing=-300px cellPadding=10px  border=0px  style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
	
    <TR>
	<TD>Логин: 	
	<div style="position:absolute; left:100px;top:3px;bottom:0px;right:0px;">
	<?php echo $abs ;  ?> </div>
	</TD>

	 </TABLE> </div>
</FORM>

			</center>
			
			
			<div class="cl">&nbsp;</div>
		</div>
		
			<div id="navigation">
			<ul>
			    <li><a href="location1.php" >Главная</a></li>
			    <li><a href="location2.php">О магазине</a></li>
			    <li><a href="location3.php">Услуги</a></li>
			    <li><a href="location4.php">Товары</a></li>
			    <li><a href="location5.php" class="active">Отзывы</a></li>
			    <li><a href="location6.php">Контакты</a></li>
				</ul>
					<div class="cl">&nbsp;</div>
			
		</div>
		
					
	
		
		
			<div id="main">
			<div id="body">
			<div class="banner">&nbsp;</div>
			       <div id="content">
				        <div class="content">
								<ul>
									<li>
										
										<h2>Клиенты</h2>
										<p>Наши клиенты:</a></p>
											<code lang="php">
	<form action="otzivi2.php" method="get">
	<input type="submit" value="Сортировать по алфавиту"></form>
	
	
									
										<form name=otzivi  action="location5.php"  method="get" method=POST onSubmit="feedbackSubmit()">
			
									<input type="submit" value="Удалить клиента" onClick="feedbackSubmit()"></form>
									
									
										<form action="create1.php" method="get">
	<input type="submit" value="Оставить отзыв"></form>
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
	
	$qr_result = mysql_query("SELECT * FROM `host`")

	or die(mysql_error());
	
	echo '<table align="center" width="900" height="300" <table border="1"> ';
		echo '<thead>';
		echo '<tr>';

		
		echo '<th>	id </th>';
		echo '<th>	ФИО покупателя </th>';
		echo '<th>	Телефон </th>';
		echo '<th>	Адрес </th>';
				echo '<th>	Отзыв </th>';
		
					
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
	while($data = mysql_fetch_array($qr_result)){
		echo '<tr>';

			echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['name'] . '</td>';
		echo '<td>' . $data['tel'] . '</td>';
			echo '<td>' . $data['adress'] . '</td>';
				echo '<td>' . $data['otziv'] . '</td>';
		echo '</tr>';
	}

	echo '</tbody>';
	echo '</table>';
	
	mysql_close($connect_to_db);
?>

<center>
		<h2>Только честные отзывы</h2>
					<p>Предоставляем гарантию:</a></p>
				
  <tr>
		<img src="images/provereno.jpg" alt="" />  </tr>
			</center>
			<div class="shadow-l"></div>
		<div class="shadow-r"></div>
		
	
		<div class="shadow-b"></div>
	</div>

		
		
		
		
	
	<div id="footer">
		<div class="footer-nav left">
			<ul>
			  <li><a href="location1.php">Главная</a></li>
			    <li><a href="locaton2.php">О нас</a></li>
			    <li><a href="location3.php">Услуги</a></li>
			    <li><a href="location4.php">Товары</a></li>
			    <li><a href="location5.php">Отзывы</a></li>
			    <li class="last"><a href="location6.php">Контакты</a></li>
			</ul>
		</div>
	<p class="copy right">МузТорг &copy; ! МузТорг 2017 | Сайт с применением CSS &amp; HTML. Сделал  <a href="https://vk.com/vlexan" target="_blank" title="The Sweetest CSS Templates WorldWide">Алексей</a></p>
		<div class="cl">&nbsp;</div>
	</div>
</div>
</body>
</html>