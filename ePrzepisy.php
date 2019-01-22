<?php

	session_start();
	
	if (($_SESSION['zalogowany']!=true) || ($_SESSION['admin']!=true) )
	{

		
			header('Location: strona.php');
			exit();
		
	
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
	<link rel="stylesheet" type="text/css" href="beka.css"/>
	
<script type="text/javascript" src="edycja.js"></script>

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
 <script>
	
		    $(document).on('click', 'a[href^=\\#]', function (event) 
		    {
						
            event.preventDefault();


             $('html, body').animate({
             scrollTop: $($.attr(this, 'href')).offset().top-60
             }, 2000);
             });
	    </script>
 
  <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h3 class="pull-left"><br>Edycja przepisów</h3>
                        <br><a href="#one" class="btn btn-success pull-right">Dodaj lub usuń przepis</a>
						
             

			
<form action="przepisyins.php" method="post">
<table class='table table-bordered table-striped table-responsive'><tr><td></td><td><b>NR</b></td><td><b>Nazwa</b></td><td><b>Rodzaj</b></td><td><b>Składniki</b></td><td><b>Przygotowanie</b></td><td><b>Adres zdjęcia</b></td></tr>
<?php
$numerWiersza=1;
$z =  mysqli_query($db,"SELECT * FROM `przepisy`");
while($tab=mysqli_fetch_row($z))
{echo '<tr><td><button type="submit"  name="edytowanie" value='.$tab[0].' onclick="edytujProdukty('.$numerWiersza.')" class="edycja">E</button>
<input type=checkbox name="d['.$tab[0].']" value='.$tab[0].'></td><td>'.$numerWiersza.'</td>';
for($i=1; $i<count($tab); $i++)
{
echo '<td>'.$tab[$i].'</td>';
}
echo '</tr>';
$numerWiersza++;
}
mysqli_close($db);
?>
<tr><td><input type="submit" class="klik" name="usuwanie" value="usuń" class="button"/></td><td><input type="submit" class="klik" name="dodawanie" id= "one" value="dodaj" class="button"/></td>
<td><input type=text class="pole" name=nazwa></td>
<td><input type=text class="pole" name=rodzaj></td>
<td><input type=text class="pole" name=składniki></td>
<td><input type=text class="pole" name=opis></td>
<td><input type=text class="pole" name=img></td></tr>
</table>
<br>
</form>
<script>
function edytujProdukty(wiersz) {
            if (document.getElementById("Zatwierdzacz") != null)
              return;
            var komorka;
            var input;
            var dzieci = document.getElementsByTagName("tr")[wiersz].children;
            komorka = document.createElement("td");
            input = document.createElement("button");
            input.type = "submit";
            input.name = "submit";
            input.id = "Zatwierdzacz";
            input.className = "edycjaPrzycisk";
            input.value = dzieci[0].children[1].value;
            input.appendChild(document.createTextNode("Ok"));
            komorka.appendChild(input);
            input = document.createElement("button");
            input.type = "submit";
            input.name = "cancel";
            input.className = "edycjaPrzycisk";
            input.appendChild(document.createTextNode("Esc"));
            komorka.appendChild(input);
            document.getElementsByTagName("tr")[wiersz].removeChild(dzieci[0]);
            document.getElementsByTagName("tr")[wiersz].appendChild(komorka);
            var nr = dzieci[0];
            document.getElementsByTagName("tr")[wiersz].removeChild(nr);
            document.getElementsByTagName("tr")[wiersz].appendChild(nr);
            var numer = 1;
            for (var i = dzieci.length; i > 2; i--) {
                komorka = document.createElement("td");
                input = document.createElement("input");
                input.type = "text";
                input.name = "n" + numer;
                numer++;
                input.value = dzieci[0].textContent;
                input.className = "pole";
                komorka.appendChild(input);
                document.getElementsByTagName("tr")[wiersz].removeChild(dzieci[0]);
                document.getElementsByTagName("tr")[wiersz].appendChild(komorka);
            }
        }

</script>


       </div>
                    
                </div>
            </div>        
        </div>
    </div>








			
</main>
<p></p>
     

	
		</div>
     
	 
   <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>  
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




</body>

</html>




