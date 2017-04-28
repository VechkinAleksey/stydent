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
			
			// session_start(); 
			
			require_once 'connection.php';
			
			
	if (!empty($_GET['Nick_Name'])){
			
		//	$user_id='';
	//		$login='';
			
			 $_SESSION['Nick_Name'] ;
//mysqli_query($dbcnx, "SET CHARACTER SET utf8");

 $_GET['Nick_Name'];
  $_SESSION['Nick_Name']=  $_GET['Nick_Name'];;
$login =   $_SESSION['Nick_Name'];
	// $_SESSION['Nick_Name'] = $login ;
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
	  <TD>Добро пожаловать на сайт!</TD>

	 </TD>
    </TR>
   

			<center>
 <form name="indexform" action="location1.php" method="POST" onSubmit="return validate_form ( );">
    <TABLE width= 200px cellSpacing=-300px cellPadding=10px  border=0px  style="border-style: dashed; border-width: 1px" bgcolor="#FFE5B6">
	
    <TR>
	<TD>Логин: 	
	<div style="position:absolute; left:848px;top:46px;bottom:0px;right:0px;">
	<?php  echo $login ; ?> </div>
	</TD>

	 </TABLE>
	 	<div style="position:absolute; left:610px;top:76px;bottom:0px;right:0px;">
	 <td>

<a href="index.php?exit">Выход</a>		</td></div>
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
			    <li><a href="location1.php" class="active" name=index>Главная</a></li>
			    <li><a href="location2.php">О магазине</a></li>
			    <li><a href="location3.php">Услуги</a></li>
			    <li><a href="location4.php">Товары</a></li>
			    <li><a href="location5.php">Отзывы</a></li>
			    <li><a href="location6.php">Контакты</a></li>
				</ul>
					<div class="cl">&nbsp;</div>
			
		</div>
		
		<div>
		<img src="images/Screenshot_2.png" alt="" />
	</div>
		
	<!--<div class="container">
  <ul id="slides">
    <li class="slide showing"></li>
    <li class="slide"></li>
    <li class="slide"></li>
  </ul>
  <div class="buttons">
    <button class="controls" id="previous">&lt;</button>

    <button class="controls" id="pause">&#10074;&#10074;</button>

    <button class="controls" id="next">&gt;</button>
  </div>
</div>
		<!--
		<div class="slider">
			<div class="slider-nav">
				<a href="#" class="left notext">1</a>
				<a href="#" class="left notext">2</a>
				<a href="#" class="left notext">3</a>
				<a href="#" class="left notext">4</a>
				<div class="cl">&nbsp;</div>
			</div>
			<ul>
			    <li>
			    	<div class="item">
						<div class="text">
							<h3><em>новый магазин</em></h3>
							<h4><em>ДОСТУПНЫЕ ЦЕНЫ</em></h4>
						</div>
			    		<img src="css/images/лого3.jpg" alt="" />
			    	</div>
			    </li>
			    <li>
			    	<div class="item">
						<div class="text">
							<h3><em>лучшие исполнители</em></h3>
							<h4><em>НОВИНКИ МУЗЫКИ</em></h4>
						</div>
			    		<img src="css/images/лого4.jpg" alt="" />
			    	</div>
			    </li>
			    <li>
			    	<div class="item">
						<div class="text">
							<h3><em>новые поступления</em></h3>
							<h4><em>КАЖДУЮ НЕДЕЛЮ</em></h4>
						</div>
			    		<img src="css/images/лого5.jpg" alt="" />
			    	</div>
			    </li>
			    <li>
			    	<div class="item">
						<div class="text">
							<h3><em>всё это вы можите найти в нашем магазине</em></h3>
							<h4><em>СКИДКА НА ПЕРВУЮ ПОКУПКУ 30%</em></h4>
						</div>
			    		<img src="css/images/лого6.jpg" alt="" />
			    	</div>
			    </li>
			</ul>
		</div>
		
		-->
		
		<div id="main">
			<div id="content" class="left">
				<div class="highlight">
					<h3>Немного о нас</h3>
					<img src="css/images/logod1.png" alt="" class="right" />
					<p>Главная особенность нашего магазина в том, что мы предоставляем качественный товар и обслуживание. Даём гарантию по купленому товару и помогаем людям если у них есть вопросы
					по этому товару.</p>
					<a href="location2.php" class="more">Узнать больше</a>
				</div>
				
				<div class="projects">
					<h3>Новые проекты</h3>
					<div class="item">
						<div class="image left">
							<a href="#"><img src="css/images/Без имени-4.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>новый музыкальный проект "todd"</h4>
							<p>Проект "TODD" - нечто новое в музыкальной сфере. Рок атмосфера, которую вы ещё не видели.</p>
							<a href="location4.php" class="more">Узнать больше</a>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="#"><img src="css/images/Без имени-5.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>новый музыкальный проект "театр демона"</h4>
							<p>Наша оценка магазина 10 из 10. Один из лучших акустических альбом легендарной группы "Король и шут".</p>
							<a href="location4.php" class="more">Узнать больше</a>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="#"><img src="css/images/Без имени-6.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>концерты "король и шут"</h4>
							<p>30 мая состоиться концерт "Король и шут" в ДК им.Кирова. Начало в 19:00 по Мск.</p>
							<a href="location4.php" class="more">Узнать больше</a>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="#"><img src="css/images/Без имени-7.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>экскурс в прошлое</h4>
							<p>Если вы фанат группы "КиШ", то альбом "Проказник скоморох" должен порадовать вас лучшей музыкой. Данный альбом - панк как он есть.</p>
							<a href="location4.php" class="more">Узнать больше</a>
						</div>
						
						<div class="cl">&nbsp;</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="right">
				<h3>Вы можите</h3>
				<div class="sidebar-nav">
					<ul>
					    <li><a href="location4.php">Купить товар</a></li>
					    <li><a href="location6.php">Связатся с продавцом</a></li>
					    <li><a href="location5.php">Наисать отзыв</a></li>
					    <li><a href="location4.php">Посмотреть товар</a></li>
					    <li><a href="location3.php">Посмотреть предоставляемы услуги</a></li>
					</ul>
				</div>
				
				<a href="location4.php" class="btn-buy"><em>Купить </em></a>
				
				<div class="advertisement">
					<h3>Advertisement</h3>
					<div class="ads">
						<div class="ad left">
							<a href="#"><img src="css/images/ad01.gif" alt="" /></a>
						</div>
						<div class="ad right">
							<a href="#"><img src="css/images/ad02.gif" alt="" /></a>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
				
				<div class="info">
					<h3>Наш магазин.</h3>
					<p>Наш магазин на данный момент только открылся. На новый и старый товар предоставется скидка от 10% до 50%.</p>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
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
			    <li> <a href="location6.php">Контакты</a></li>
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