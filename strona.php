<!DOCTYPE html>
<html lang="pl-PL">
<head>
<link rel="Shortcut icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Kucharzenie" content="Coś o kucharzeniu">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styl.css"/>

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

mysqli_close($db);
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
      
	 
	  
	  
	  
	  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		O nas
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Jesteśmy firmą promującą zdrowe nawyki żywieniowe. Dzięki współpracy z Instytutem Żywności i Żywienia im. prof. dra med. Aleksandra Szczygła możemy zaoferować Państwu najwyższej jakości produkty, 
		które mogą zostać wykorzystane zgodnie z naszymi sprawdzonymi przepisami.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Idea
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Celem działalności naszej firmy jest szerzenie wiedzy na temat zdrowego odżwyiania oraz promowanie produktów z ekologicznych źródeł. Leży nam na sercu ogólne zdrowie społeczeństwa, ale również zdrowie naszej żywicielki - Natury. 
		Korzystając z naszych przepisów i usług mają Państwo pewność, że spełnią wszelkie wymagania dotyczące wartości odżwyczych.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Przyłącz się!
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Dzielenie się informacjami jest ogromnym sprzymierzeńcem dla rozwoju, dlatego mają Państwo możliwość przesłania nam swoich pomysłów (mail: przepis@kucharzenie.pl). Po sprawdzeniu ich pod kątem wartości odżywczych przez naszego specjalistę  zostaną one opublikowane na stronie,
        by każdy odwiedzający miał możliwość sprawdzenia, jakie smaki kryją się w Państwa domach. Gorąco zachęcamy!		
      </div>
    </div>
  </div>
</div>
       <p></p>
	  
	  
	  
	  
	  
	
	  
	  
	    <div class="container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="padding:0">
	  
      <div id="przykladowaKaruzela4" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#przykladowaKaruzela4" data-slide-to="0" class="active"></li>
      <li data-target="#przykladowaKaruzela4" data-slide-to="1"></li>
      <li data-target="#przykladowaKaruzela4" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner">
       <div class="carousel-item active">
      <img class="d-block w-100" src="/strona/img/groch.png" alt="Pierwszy slajd">
      <div class="carousel-caption">
        <h3>Najwyższej jakości produkty</h3>
     gwarantują wartościowy posiłek
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/strona/img/ciastko.png" alt="Drugi slajd">
      <div class="carousel-caption">
        <h3>Idealnie skomponowane składniki</h3>
        zaspokoją prawdziwych smakoszy
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/strona/img/patelnia.png" alt="Trzeci slajd">
      <div class="carousel-caption">
        <h3>Pamiętając o podstawach</h3>
        by regularne spożywanie posiłków stało się przyjemnym obowiązkiem
      </div>
    </div>
</div>
  </div>

</div>
<p></p>
        </main>

       <footer >
	      <h3>Kontakt</h3>
          
           Adres:
	      <br> ul. Miętowa 18
          <br>81-589 Gdynia
          <br>Tel.: 58 98 414 56
          <br>o_om@o2.pl</br>
	
        </footer>

	
		</div>
     
	 <link rel="stylesheet" href="dist/css/lightbox.min.css">
	 	   
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	   
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




</body>

</html>