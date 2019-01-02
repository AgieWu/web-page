<?php
session_start();
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
	
		  <ul class="main" >
	      <li><a href="http://localhost:8080/strona/strona.php">Home</a></li>
		  <li><a href="http://localhost:8080/strona/przepisy.php">Przepisy</a></li>
          <li><a href="#">Produkty <i class="fa fa-caret-down"></i></a>
         
		 <ul >
		  <li><a href="http://localhost:8080/strona/Ryże.php">Ryże</a></li>
           <li><a href="http://localhost:8080/strona/Kasze.php">Kasze</a></li>
	       <li><a href="http://localhost:8080/strona/Mąki.php">Mąki</a></li>
		  </ul>	
		 
		  </li>
		   <li class="log"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Zaloguj</a></li>
          </ul>
		  <a href="javascript:void(0);"  class="icon" onclick="myFunction()"> &#9776;</a>
        </nav>
			
		</header>
	
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
	


     <main >

				
		
	 <div class="przepisy container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
	 


           <section>
				
		<?php
	require_once "connect.php";
	$connect = new mysqli($host, $user, $pass, $database);
	$connect -> query ('SET NAMES utf8');
	$connect -> query ('SET CHARACTER_SET utf8_unicode_ci');
	if ($connect->connect_errno!=0)
	{
		echo "Połączenie nie mogło zostać utworzone. Błąd: ".$connect->connect_errno;
	}
	else
	{
		

		$sql="SELECT * FROM produkty WHERE kategoria='kasze' ";
		$wynik=$connect->query($sql);
	
		if(mysqli_num_rows($wynik) > 0) { 
		/* jeżeli wynik jest pozytywny, to wyświetlamy dane */ 
		echo "<table>"; 
		while($r = mysqli_fetch_object($wynik)) { 
        echo "<tr>"; 
		echo "<td><br>".$r->img."</td>";
        echo "<td><b>".$r->nazwa."</b><br><br>"; 
		 
        echo "<p align='justify'>".$r->opis."</p><br><br>"; 
		echo "<p align='justify'><b>Cena: </b> ".$r->cena." zł</p><br><br>"; 
		
		//echo "<form method='POST' action='ulubione.php'><input type='hidden' name='Nr_ksiazki' value=".$r->Nr_ksiazki."><input type='submit' value='Ulubione'></form></td>";
        echo "</tr>"; 
		} 
		echo "</table><br><br>"; 
		//koniec tabeli

		}	
		
		$connect->close();
	}
	
?>

		    </section>
			<div>
        </main>

       <footer >
	      <h3>Kontakt</h3>
          
          <p>Adres:
	      <br> ul. Miętowa 18
          <br>81-589 Gdynia
          <br>Tel.: 58 98 414 56</br></p>
	
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




