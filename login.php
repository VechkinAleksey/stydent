<?php
session_start();
?><! СКРИПТ: СКРИПТ ПРОВЕРКИ ЛОГИНА И ПАРОЛЯ С БД>
<html>
<META http-equiv=content-type content="text/html; charset=utf8">
<LINK href="main.css" type=text/css rel=stylesheet>
	<link rel="shortcut icon" href="css/images/logod.ico" />

<?php
//session_start();
print_r($_SESSION);
 
//require_once 'sessia.php';
//session_start();

require_once 'connection.php';

	$login =$_POST['login'];
	$pass = $_POST['pass'];
	$index = $_POST['index'];
	$user_id='';
//	$per_id='';
$pers_id='';
	
 if(isset($_POST['index'])){
	 
	  $query = "SELECT id, Nick_Name, User_Pass
            FROM users
            WHERE Nick_Name= '$login' AND 	User_Pass = '$pass' 
            ";
    $sql = mysqli_query($dbcnx, $query) or die(mysqli_error($dbcnx));
	$f = mysqli_fetch_array($sql);
 }

 
 if($f['Nick_Name']==  $login  && $f['User_Pass'] ==  $pass ){
	 
	  $_SESSION['USER_ID'] ;
	  $user_id	= $f['USER_ID'];
		  $_SESSION['USER_ID'] = $user_id ;
		  
		  		$_GET['Nick_Name'];
					$_GET['Nick_Name']= $f['Nick_Name']; 
				 $_SESSION['Nick_Name'] = $login ;
					
					$_SESSION['Nick_Name']=$f['Nick_Name'];
		
		echo "" .$_SESSION['USER_ID']."";
		
		echo " Ваш новый id $user_id";
		
	 echo "<br>Ваш id = {$f['USER_ID']}</br>";
	 echo "Добро пожаловать, {$f['Nick_Name']}";
		
		echo " Ваш новый id $user_id </br>";
		
	 echo "Добро пожаловать, {$f['Nick_Name']}</br>";
	 	//  echo "Не верные данные!";
	 
"</br>";
 }else {
	 print( '<SCRIPT>
	alert("Не верные данные!"); </SCRIPT>' );

 print('<SCRIPT>location.href="index.php";</SCRIPT>');
 }



if ($f['id']>1 && $f['id']!=1 ){
	 print( '<SCRIPT>
	alert("Авторизация прошла успешно!"); </SCRIPT>' );

print('<SCRIPT>location.href="location1.php?Nick_Name='.$f['Nick_Name'].'";</SCRIPT>');

 } else if ($f['id']=1){
	 print( '<SCRIPT>
	alert("Добро пожаловать "Admin""); </SCRIPT>' );

print('<SCRIPT>location.href="loc1.php?Nick_Name='.$f['Nick_Name'].'";</SCRIPT>');
 } 

/*
if($f['id']=2){
	 print( '<SCRIPT>
	alert("Добро пожаловать "Admin""); </SCRIPT>' );

print('<SCRIPT>location.href="loc1.php?Nick_Name='.$login.'";</SCRIPT>');

 } else if ($f['id']!=2){
	 print( '<SCRIPT>
	alert("Авторизация прошла успешно!"); </SCRIPT>' );

print('<SCRIPT>location.href="location1.php?Nick_Name='.$login.'";</SCRIPT>');
 } else{
	  echo "Не верные данные!";
 }

  }  */

/*
	 
	 if($f['id']>0){
	 print( '<SCRIPT>
	alert("Авторизация прошла успешно!"); </SCRIPT>' );

print('<SCRIPT>location.href="location1.php?Nick_Name='.$login.'";</SCRIPT>');

 } else{
	 echo "Не верные данные!";
 }

  }
 */
?>
</html>
