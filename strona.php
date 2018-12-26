<!DOCTYPE html>
<html lang="pl-PL">
<head>
<link rel="Shortcut icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="Kucharzenie" content="Coś o kucharzeniu">
<meta name="author" content="Ja">
<title>Kucharzenie</title>
<link href="https://fonts.googleapis.com/css?family=Asar" rel="stylesheet">
<link rel="stylesheet" href="dist/css/lightbox.min.css">
<link rel="stylesheet"  href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="styl.css"/>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

	
<script>

			
		$(document).on('click', 'a[href^=\\#]', function (event) 
		{
            event.preventDefault();

             $('html, body').animate({
			
             scrollTop: $($.attr(this, 'href')).offset().top
             }, 2000);
             });
	

		</script>

<div class="container">

<header>

<img src="/strona/img/nag.png">




      <nav id="header-menu" class="navbar-fixed-top">
      <ul> <li><a href="#one">First chapter</a></li>
	   <li><a href="#two">Second chapter</a></li>
	   <li><a href="#three">Third chapter</a></li></ul>
      </nav>
    
</header>
  <main>
    <section id="one">
				<h1>First chapter</h1>
				<article>
					<p>
					s venenatis, at gravida ri
					</p>
					<p>
						Donec finibus 
					</p>
				</article>
			</section>
			<section id="two">
				<h1>Second chapter</h1>
				<article>
					<p>
						Donec finibus
					</p>
					<p>
						Donec ajdjd
					</p>
				</article>
			</section>
			<section id="three">
				<h1>Third chapter</h1>
				<article>
					<p>
						Donec finibus vff
					</p>
					
					<p>
						Donec finibus lkk
					</p>
				</article>
			</section>
</main>

<footer >
	<h3>Kontakt</h3>
    <p>Zapraszamy do zakupów poprzez stronę internetową.</p>
	<p>Dla państwa wygody uruchomiony został również sklep stacjonarny.</p>
    <p>Adres:
	<br> ul. Miętowa 18
    <br>81-589 Gdynia
    <br>Tel.: 58 98 414 56</br></p>
</footer>
 </div>


</body>

</html>