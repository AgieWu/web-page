<!DOCTYPE html>
<html lang="pl-PL">
<head>
<link rel="Shortcut icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Kucharzenie" content="Coś o kucharzeniu">
	<link rel="stylesheet" type="text/css" href="styl.css"/>

<title>Kucharzenie</title>


		<link href="https://fonts.googleapis.com/css?family=Asar" rel="stylesheet">

</head>

<body>

  <script>
	
		    $(document).on('click', 'a[href^=\\#]', function (event) 
		    {
						
            event.preventDefault();


             $('html, body').animate({
             scrollTop: $($.attr(this, 'href')).offset().top-300
             }, 2000);
             });
	    </script>

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
		   <li><a href="#two">Ryże</a></li>
           <li><a href="#three">Kasze</a></li>
	       <li><a href="#three">Inne</a></li>
		  </ul>	
		 
		  </li>
		   <li class="log"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Zaloguj</a></li>
          </ul>
		  <a href="javascript:void(0);"  class="icon" onclick="myFunction()"> &#9776;</a>
        </nav>
			 <div class="scroll ">
	
	 <ul >
		   <li><a href="#two">Przepisy wegańskie</a></li>
           <li><a href="#three">Przepisy wytrawne</a></li>
	       <li><a href="#three">Przepisy na słodko</a></li>
		  </ul>	
	
	 </div>
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
	
	

     <main>

     <a href="#two">Przepisy na słodko</a>
           <section id="one">
				<h1>Przepisy wegańskie</h1>
				<article>
					<p>
					
					s venenatis, at gravida ri
                    Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. 
					Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
                    Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius.
					Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
					Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. 
					Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
                    Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius.
					Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
					Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. 
					Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
                    Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius.
					Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
					</p>
					
				</article>
		    </section>
	       <section id="two">
				<h2>Przepisy wytrawne</h2>
				<article>
					<p>
						Donec finibus
                        Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
					</p>
					<p>
						Donec ajdjd
                        Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
					</p>
				</article>
			</section>
	       <section id="three">
				<h1>Przepisy na słodko</h1>
				<article>
					<p>
						Donec finibus vff et  varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l Donec finibus vff et eros venenatis, at gravida risus varius.
						Aliquam non l et eros venenatis, at gravida risus varius. 
						Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis,
						at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius
						. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
					</p>
					<p>
						Donec finibus lkk liquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros ve s, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Ali
					</p>
				</article>
			</section>
        </main>

       <footer >
	      <h3>Kontakt</h3>
          <p>Zapraszamy do zakupów poprzez stronę internetową.
	      <br>Dla państwa wygody uruchomiony został również sklep stacjonarny.</br></p>
          <p>Adres:
	      <br> ul. Miętowa 18
          <br>81-589 Gdynia
          <br>Tel.: 58 98 414 56</br></p>
	
        </footer>

	
		</div>
     
	 
<link rel="stylesheet" href="dist/css/lightbox.min.css">

	 	   
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	   
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




</body>

</html>




