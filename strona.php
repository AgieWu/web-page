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
      
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
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
        <h5>Pierwszy slajd</h5>
        <p>Opis pierwszego slajdu</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placeholdit.imgix.net/~text?txtsize=107&txt=Drugi+slide&w=1280&h=500" alt="Drugi slajd">
      <div class="carousel-caption">
        <h5>Drugi slajd</h5>
        <p>Opis drugiego slajdu</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placeholdit.imgix.net/~text?txtsize=107&txt=Trzeci+slide&w=1280&h=500" alt="Trzeci slajd">
      <div class="carousel-caption">
        <h5>Trzeci slajd</h5>
        <p>Opis trzeciego slajdu</p>
      </div>
    </div>

  </div>

</div>


           <section id="one"  >
				<h1>Przepisy wegańskie</h1>
				<article>
					<p>
					
					s venenatis, at gravida ri
                    Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
                    Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
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
						Donec finibus vff et  varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l Donec finibus vff et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l et eros venenatis, at gravida risus varius. Aliquam non l
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