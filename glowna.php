<!DOCTYPE html>
<html lang="en">
<head>
<link href="path/to/lightbox.css" rel="stylesheet">
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="C:\Users\Mr.Robot\Downloads\PAI-master\PAI-master\dist\js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="glowna.php">Home</a></li>

		
		<?php
/*$menu = array('kat1.php'=>'Kategoria_1', 'kat2.php'=>'Kategoria_2','kat3.php'=>'Kategoria_3','kontakt.php'=>'Kontakt' );
foreach ($menu as $key => $value):
?>
  <li><a href="<?php echo $key?>"><?php echo $value?></a></li>
<?php endforeach ?> */
		
		
			 $polaczenie = @mysqli_connect('localhost', 'root', 'toor1', 'pai_wilusz');
  if (!$polaczenie) {
    die('Wyst¹pi³ b³¹d po³¹czenia: ' . mysqli_connect_errno());
  }
  @mysqli_query($polaczenie, 'SET NAMES utf8');

  $sql = 'SELECT `id`, `nazwa`
               FROM `kategorie`
               ORDER BY `nazwa`';
  $wynik = mysqli_query($polaczenie, $sql);
  if (mysqli_num_rows($wynik) > 0) {
  	echo "<ul>" . PHP_EOL;
    while (($kategoria = @mysqli_fetch_array($wynik))) {
      echo '<li><a href="'. $_SERVER["PHP_SELF"] . '?kat_id=' . $kategoria['id'] . '">' . $kategoria['nazwa'] . '</a></li>' . PHP_EOL;
    }
    echo "</ul>" . PHP_EOL;
  } else {
    echo 'wyników 0';
  }

  //Pobieramy dane produktów z bazy dla wybranej (metod¹ GET) kategorii
  $kat_id = isset($_GET['kat_id']) ? (int)$_GET['kat_id'] : 1;
  $sql = 'SELECT `nazwa`, `opis`
               FROM `produkty`
               WHERE `kategoria_id` = ' . $kat_id .
               ' ORDER BY `nazwa`';
  $wynik = mysqli_query($polaczenie, $sql);
  if (mysqli_num_rows($wynik) > 0) {
    while (($produkt = @mysqli_fetch_array($wynik))) {
        echo '<p><b>' . $produkt['nazwa'] . '</b>: ' . $produkt['opis'] . '</p>' . PHP_EOL;
		  echo '<p><b>' . $produkt['nazwa'] . '</b>: ' . $produkt['opis'] . '</p>' . PHP_EOL;
    }
  } else {
    echo 'wyników 0';
  }
mysqli_close($polaczenie); 


?>
			


 

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <h3>Collapsible Navbar</h3>
    <a href ="o1.png" data-lightbox="cototje"  alt="Kasia zjad³a obrazek" />
  <script>

    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
  <p> <a href ="o1.png" data-lightbox="cototje"  alt="Kasia zjadla obrazek" />
   <img src="o1.png" alt="Kasia zjad³a obrazek" style= "width: 100px"/>
  
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>
<footer style ="background-color:black">
<h1 style = "color:white">Stopa</h1>
</footer>
</body>
</html>