
<?php
$log=0;
$em=0;	
$has=0;

session_start();
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo1']))  || (!isset($_POST['haslo2']))  || (!isset($_POST['email'])))
	{
		header('Location: logowanie.php');
		exit();
	}
require_once "connect.php";	  
$connect = @new mysqli($host, $user, $pass, $database);

if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}
else
	{
	    $login = ($_POST['login']);
		$haslo1 = ($_POST['haslo1']);
		$haslo2 = ($_POST['haslo2']);
		$email = ($_POST['email']);
		

$query="SELECT login FROM uzytkownicy WHERE login='$login'";
$result = mysqli_query($connect, $query);
$numrow=mysqli_num_rows($result);


	if((empty($login))||(empty($email))||(empty($haslo1))||(empty($haslo2))){
	echo "Uzupełnij arkusz.<br>";}
	
	if ($numrow == 0) 
 {
	$log=1;
	
 }
    else {
		echo "Podany login jest już zajęty. Spróbuj ponownie.<br>";
		$log=0;   
	}
	
	$query2="SELECT email FROM uzytkownicy WHERE email='$email'";
	$result2 = mysqli_query($connect, $query2);
	$numrow2=mysqli_num_rows($result2);
		if ($numrow2 == 0) 
 {
	$ma=1;
	
 }
    else {
		echo "Podany email jest już w użyciu. Spróbuj ponownie.<br>";
		$ma=0;   
	}
	
   $sprawdz = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';

	if(preg_match($sprawdz, $email)){
	$em=1;}
	else{
	echo 'Adres e-mail nieprawidłowy. Spróbuj ponownie.<br>';
	$em=0;}


    if ($haslo1 == $haslo2) 
      {
		  $has=1;

      }
    else {
		echo "Hasła nie są takie same. Spróbuj ponownie.<br>";
		$has=0;
	}
	
	
if(($log==1)&&($has==1)&&($em==1)&&($ma==1)){
        $query3=("INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`)
        VALUES ('".$login."', '".md5($haslo1)."', '".$email."');");
		mysqli_query($connect, $query3);
		$_SESSION['login']=$login;
       $_SESSION['zalogowany']=true;
	   header('Location: Konto.php');
	   exit;}
	   
	   $connect->close();

   } 
?>