<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		if($_SESSION['admin']==true)
		{
			header('Location: admin.php');
			exit();
			}
	     else
		 {
			 header('Location: Konto.php');
			 
		exit();
		 }
	}

?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
<link rel="Shortcut icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Kucharzenie" content="Coś o kucharzeniu">
	<link rel="stylesheet" type="text/css" href="styl.css"/>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<title>Kucharzenie</title>

<link href="https://fonts.googleapis.com/css?family=Asar" rel="stylesheet">

</head>

<body>


		<div class="container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
		
		
	    <a href="http://localhost:8080/strona/strona.php">
         <img class="img-responsive" src="/strona/img/logo1.png" height="25%" width="100%"/> 
        </a>

	  
	       <header>
	
		<nav id="menu" class="navbar">
		
		  
		<?php
include('newconnect.php');
@mysqli_query($db, 'SET NAMES utf8');

$sql_categories = 'SELECT `id`, `nazwa`,`adres_k`
            FROM `kategorie`
            ORDER BY `id`';
$wynik = mysqli_query($db, $sql_categories);
if (mysqli_num_rows($wynik) > 0) {
    while ($kategoria = @mysqli_fetch_array($wynik)) {
        echo "<ul class='main'>" . PHP_EOL;
        $sql_subcategories = "SELECT `id`, `nazwa`, `adres`
                FROM `podkategorie`
           WHERE kategoria_id=" . $kategoria['id'] . "
                ORDER BY `id`";
        $wynik2 = mysqli_query($db, $sql_subcategories);
        if (mysqli_num_rows($wynik2) > 0) {
		
			 echo "<li><a>".$kategoria['nazwa']."</a>" . PHP_EOL;
			 echo "<ul>" . PHP_EOL;
            
            while ($podkategoria = @mysqli_fetch_array($wynik2)) {
                echo '<li><a href="' . $podkategoria['adres'] . '">' . $podkategoria['nazwa'] . '</a></li>' . PHP_EOL;
            }
			echo "</ul></li>" . PHP_EOL;
		}
        else {
            echo '<li><a href="' . $kategoria['adres_k'] . '">' . $kategoria['nazwa'] . '</a></li>' . PHP_EOL;
        }
        echo "</ul>" . PHP_EOL;
    }
} 
else {
    echo 'wyników 0';
}

//mysqli_close($db);
?>
<a href="javascript:void(0);"  class="icon" onclick="myFunction()"> &#9776;</a>
		  
		  	<script>
       function myFunction() {
       var x = document.getElementById("menu");
       if (x.className === "navbar") {
        x.className += " responsive";
       } else {
        x.className = "navbar";
       }
       }
    </script>
	
        </nav>
			
		</header>
		
		

 <main>
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  <div align="center">
   <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		Logowanie
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
	  
	  
	  
	  
	  
	  <?php
	

	
require_once "connect.php";
$connect = new mysqli($host, $user, $pass, $database);
	if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}
	else
	{
		$login = $haslo = $hasloszyfr="";
		if($_SERVER["REQUEST_METHOD"] == "POST")
			
		{ if(isset($_POST["loguj"]))
		  {
		  // $przycisk = trim($_POST["loguj"]);
	       $login = trim($_POST["login"]);
		   $haslo = trim($_POST["haslo"]);
		   $hasloszyfr = md5($haslo);
		 
		    $sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$hasloszyfr'";
		    if($rezultat=$connect->query($sql))
		   {
				$ilu_user=$rezultat->num_rows;
				if($ilu_user>0)
				{
					$_SESSION['zalogowany']=true;
					$wiersz=$rezultat->fetch_assoc();
					$_SESSION['id']=$wiersz['id'];
					$_SESSION['login']=$wiersz['login'];
					$_SESSION['haslo']=$wiersz['haslo'];					
					$rezultat->free();
					header('Location: Konto.php');
					if($_SESSION['id']==1)
					{
						$_SESSION['admin']=true;
						header('Location: admin.php');
					}
					elseif($_SESSION['id']!==1)
					{
						$_SESSION['admin']=false;
					}
				}
				else
				{
					 //header('Location: Loguj.php');
					//echo "Nieprawidłowy login lub hasło. Spróbuj ponownie.";
					 echo("<center><label><font color=\"red\">Nieprawidłowy login lub hasło</font></label></center>");
				}
					
		    }
	      }
	   }
	   
	}
		
		$connect->close();
?>
	  
	    <form method="POST" action="Loguj.php">
         <br><b>Login:</b><br><input type="text" name="login"><br><br>
      <b>Hasło:</b><br><input type="password" name="haslo" ><br><br>
   <input type="submit" value="Zaloguj" name="loguj"><br><br><br>

        </form>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Rejestracja
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
	  
	  <?php
$log=0;
$em=0;	
$has=0;


require_once "connect.php";	  
$connect = @new mysqli($host, $user, $pass, $database);

if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}
else
{$loginn=$haslo1=$haslo2=$email="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if (isset($_POST["rejestruj"])){

		// $cisk = trim($_POST['rejestruj']);
	    $loginn = trim($_POST['loginn']);
		$haslo1 = trim($_POST['haslo1']);
		$haslo2 = trim($_POST['haslo2']);
		$email = trim($_POST['email']);
		
		
$query="SELECT login FROM uzytkownicy WHERE login='$loginn'";
$result = mysqli_query($connect, $query);
$numrow=mysqli_num_rows($result);


	if((empty($email))||(empty($haslo1))||(empty($haslo2))){
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
        VALUES ('".$loginn."', '".md5($haslo1)."', '".$email."');");
		mysqli_query($connect, $query3);
		$_SESSION['login']=$loginn;
       $_SESSION['zalogowany']=true;
	   header('Location: Konto.php');
	   exit;}
	   
	   $connect->close();
	}
}} 
?>
	
  <form method="POST" action="Loguj.php">
  <br><b>Login:</b><br><input type="text" name="loginn"><br><br>
  <b>Hasło:</b><br><input type="password" name="haslo1"><br><br>
  <b>Powtórz hasło:</b><br><input type="password" name="haslo2"><br><br>
  <b>Email:</b><br><input type="text" name="email"><br><br>
  <input type="submit" value="Utwórz konto" name="rejestruj"><br><br><br>
 
  </form>
      </div>
    </div>
  </div>
  </div>
</div>

				
</main>
<p></p>
       <footer>
	      <h3>Kontakt</h3>
          
           Adres:
	      <br> ul. Miętowa 18
          <br>81-589 Gdynia
          <br>Tel.: 58 98 414 56
          <br>o_om@o2.pl</br>
	
        </footer>

	
		</div>
     
	 
   <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>  
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>





</body>

</html>




