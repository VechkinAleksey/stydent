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

       alert( 'Изменить продажу может только администратор' );
	   
	    document.tovar.submit();
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
			    <li><a href="location4.php" class="active">Товары</a></li>
			    <li><a href="location5.php">Отзывы</a></li>
			    <li><a href="location6.php">Контакты</a></li>
				</ul>
					<div class="cl">&nbsp;</div>
			
		</div>
		
					
	
		
			<div id="main">
			<div class="banner">&nbsp;</div>
			       <div id="content">
				        <div class="content">
								<ul>
									<li>
										
										<h2>Продажи</h2>
										
								
		<form name=tovar  action="location4.php"  method="get" method=POST onSubmit="feedbackSubmit()">
			
									<input type="submit" value="Изменить продажу" onClick="feedbackSubmit()"></form>
					
								
		 <div style="position:absolute; left:748px;top:215px;bottom:0px;right:0px;"><h2>
<a href="services7.php">Заказать товар</h2></a>	
	
									</li>
									
									
								</ul>
						</div>
						
					 
				  
			</div>

		<?php
$db_host ='localhost';
	$db_name ='rog1';
	$db_username ='root';
	$db_password = '';
	$db_table_to_show = 'sale';
	
	
	$connect_to_db = mysql_connect($db_host, $db_username, $db_password)
	or die("Could not connect: " .mysql_error());
	
	mysql_select_db($db_name, $connect_to_db)
	or die("Could not select DB: " .mysql_error());
	
	
	mysql_query('set character_set_client="utf8"'); 
    mysql_query('set character_set_results="utf8"');
	

	
	$qr_result = mysql_query("SELECT * FROM `sale`")

	or die(mysql_error());
	
	echo '<table align="center" width="900" height="300" <table border="1"> ';
		echo '<thead>';
		echo '<tr>';

		echo '<th>	id продажи </th>';
		echo '<th>	название товара </th>';
		echo '<th>	колличество(шт) </th>';
		echo '<th>	цена(руб) </th>';
		echo '<th>	дата </th>';
					
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
	while($data = mysql_fetch_array($qr_result)){
		
		
		if(isset($_POST['rost'])){
			

//function csmp($a, $b)
//{
   //if ($a == $b) {
    //    return 0;
    //}
// return ($a < $b) ? -1 : 1;
//}


$parts = array($data);
		//print_r ($a);
      $parts = $data['quantity'] ;
	  
	  '<tr>';
//	 echo ($a);
	// echo '{$a}';

	    echo "  [".$parts."]<br>"; 
	  sort($a, SORT_STRING);
	  //usort($a);
//usort($a, "csmp");
//foreach ($a as $key => $value) {
   // echo "$key: $value\n";
//   '<td>';
  //  echo " $value<br>";
//	echo '<td>' . $value . '</td>';
	
	//	echo '<tr>';

	//echo '<td><td><td>' . $a. '</tr></td></td></td>';
		
	//	echo '<td><td><td>' . $data['quantity'] . '</tr></td></td></td>';
			
		} else{
		
		echo '<tr>';

		echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['goods'] . '</td>';
		
		
		echo '<td>' . $data['quantity'] . '</td>';
		
		
		
		echo '<td>' . $data['price'] . '</td>';
		echo '<td>' . $data['date'] . '</td>';
		echo '</tr>';
		
	}
}
	echo '</tbody>';
	echo '</table>';
	


/*

if(isset($_POST['rost'])){
	
		function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
	
		$a = array($data['quantity'] );
		print_r ($a);
     //  $a = $data['quantity'] ;
usort($a, "cmp");
foreach ($a as $key => $value) {
   // echo "$key: $value\n";
   '<td>';
  //  echo " $value<br>";
	echo '<td>' . $value . '</td>';
}
*/




	
	mysql_close($connect_to_db);

/*
	function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

if(isset($_POST['rost'])){
	
		$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");
foreach ($a as $key => $value) {
   // echo "$key: $value\n";
   '<td>';
    echo " $value<br>";
}
*/
?>
		
	<center>
		<h2>Изображение товаров</h2>
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
    <td>Диск "Как в старой сказке"</td>
    <td><img src="images/d_skazka.jpg" alt="" /></td>
<td bgcolor="#f5eeb5">«Как в старой сказке» — пятый студийный альбом российской панк-рок-группы «Король и Шут».</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Диск "Камнем по голове"</td>
     <td><img src="images/kamnem.jpg" alt="" /></td>
	 <td bgcolor="#f5eeb5">Первый номерной студийный альбом российской панк-группы «Король и Шут». </td>
  </tr>
  <tr>
    <td>3</td>
    <td>Диск "Жаль нет ружья"</td>
     <td><img src="images/jnetru.jpg" alt="" /></td>
	  <td bgcolor="#f5eeb5">Шестой студийный альбом российской панк-рок-группы «Король и Шут». </td>
  </tr>
  <tr>
    <td>4</td>
    <td>Диск "Лесник"</td>
    <td><img src="images/lesnik.jpg" alt="" /></td>
	 <td bgcolor="#f5eeb5">Текст песни был придуман Андреем Князевым на музыку Михаила Горшенёва в 1991 году. Благодаря этой песне, группа сменила название с «Контора» на «Король Шутов», а впоследствии на «Король и Шут».  </td>
  </tr>
  <tr>
    <td>5</td>
    <td>Диск "Блуждают тени"</td>
    <td><img src="images/teni.jpg" alt="" /></td>
	 <td bgcolor="#f5eeb5">Блуждают тени возле дома. </td>
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
			     <li><a href="location1.php">Главная</a></li>
			    <li><a href="location2.php">О нас</a></li>
			    <li><a href="location3.php">Услуги</a></li>
			    <li><a href="location4.php">Товары</a></li>
			    <li><a href="location5.php">Отзывы</a></li>
			    <li class="last"><a href="location6.php">Контакты</a></li>
			</ul>
		</div>
		
		
		
		
		
		<p class="copy right">МузТорг &copy; ! МузТорг 2017 | Сайт с применением CSS &amp; HTML. Сделал  <a href="https://vk.com/vlexan" target="_blank" title="The Sweetest CSS Templates WorldWide">Алексей</a></p>
		<div class="cl">&nbsp;</div>
	</div>

</body>

</html>