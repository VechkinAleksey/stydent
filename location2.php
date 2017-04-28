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
			    <li><a href="location2.php" class="active">О магазине</a></li>
			    <li><a href="location3.php">Услуги</a></li>
			    <li><a href="location4.php">Товары</a></li>
			    <li><a href="location5.php">Отзывы</a></li>
			    <li><a href="location6.php">Контакты</a></li>
				</ul>
					<div class="cl">&nbsp;</div>
			
		</div>
		
					
		
		
		<div id="main">
			<div id="content" class="left">
			<div class="highlight">
					<h3>О нашем магазине</h3>
					<img src="css/images/logod1.png" alt="" class="right" />
					<p>О нас. 

<p>Успешное развитие сети музыкальных магазинов МузТорг определяется современными технологиями, актуальной линейкой оборудования, опытом работы и высоким профессионализмом сотрудников, способностью на шаг опережать развитие рынка.

Здесь есть все необходимое для начинающего и профессионального музыканта, звукорежиссера и продюсера, владельца ресторана, клуба, кинотеатра.

Такие известные марки, как Yamaha, Fender, Ibanez, Gibson, Marshall, AKG, Shure, Korg, Numark, Pioneer, Tamа, Zildjian, Mackie, JBL... позволяют выделить магазины Music Shop среди множества подобных.

Особая атмосфера творческой тусовки, мастер-классы, презентации, дисконтные программы... — всего лишь верхний слой насыщенной событиями жизни музыкальных салонов Music Shop.

Реализация профессионального звукового и светового оборудования – это Music Shop. Но не только! Наша компания предлагает индивидуальные решения в области сложных инсталляций современных развлекательных и культурных объектов.

Главный фактор успешного развития сети Music Shop — постоянный поиск новых форм сотрудничества при неизменно дружеском отношении к нашим клиентам.
					по этому товару.</p></p>
					<a href="#" class="more">Эта информация на данный момент актуальна</a>
				</div>
		</div></div>
		
		
		
				<div id="main">
			<div id="content" class="right">
			<div class="highlight">
					<h3>Адрес нашего магазина</h3>
					<img src="css/images/logod1.png" alt="" class="right" />
					<p><li class="item">Наши контакты</li>
<p><li class="item">Телефон:8 (8412) 45-54-55</li>
<p><li class="item">Адрес:г.Пенза, ул. Лозицкой, 1</li>
<p><li class="item">email:455455zoo@mail.ru</li></p></p></p></p>
					<a href="#" class="more">Контактная информация актуальна на данный момент</a>
				</div>
		</div></div>
		
		<div id="main">
			<div id="content" class="left">
			<div class="highlight">
					<h3>Магазин на фото</h3>
					<img src="" alt="" class="right" />
					<p>Фото магазина
	<img src="css/images/адрес.jpg"  alt="" />
					<a href="#" class="more">Контактная информация актуальна на данный момент</a>
				</div>
		</div></div>
		
			<div class="cl">&nbsp;</div>
		
		
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