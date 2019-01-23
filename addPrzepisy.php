<?php

	session_start();
	if ($_SESSION['zalogowany']!=true)
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

     <main >
	
		
	 <div class="przepisy container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
	 


           <section>
				
	<?php
// Include config file
//require_once 'newconnect.php';
//mysqli_query($db, 'SET NAMES utf8');

 
// Define variables and initialize with empty values
$title = $description = $img = $category = $sklad = "";
$title_err = $description_err = $img_err = $category_err = $sklad_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate title
    $input_title = trim($_POST["nazwa"]);
    if(empty($input_title)){
        $title_err = "Wprowadź nazwę potrawy.";
    } else{
        $title = $input_title;
    }
	// Validate category
    $input_category = trim($_POST["rodzaj"]);
    if(empty($input_category)){
        $id_err = "Niepawidłowa kategoria (parametr wymagany).";     
    } else{
        $category = $input_category;
    }
	
	// Validate sklad
    $input_sklad = trim($_POST["składniki"]);
    if(empty($input_sklad)){
        $sklad_err = "Wprowadź skład przepisu";     
    } else{
        $sklad = $input_sklad;
    }
	
	
    // Validate description
    $input_description = trim($_POST["opis"]);
    if(empty($input_description)){
        $description_err = "Wprowadź opis przygotowania przepisu.";
    } else{
        $description = $input_description;
    }
	
    // Validate img
    $input_img = trim($_POST["img"]);
    if(empty($input_img)){
        $img_err = "Wprowadź link do zdjęcia.";
    } else{
        $img = $input_img;
    }
	
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($description_err) && empty($img_err) && empty($category_err)&& empty($sklad_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO przepisy (nazwa, rodzaj,skladniki, opis, img) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_title,  $param_category, $param_sklad,  $param_description, $param_img);
            
            // Set parameters
            $param_title = $title;
			$param_category = $category;
			$param_sklad=$sklad;
            $param_description = $description;
			$param_img = $img;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: przepisy.php");
				
                exit();
            } else{
                echo "Wystąpił błąd. Spróbuj ponownie później.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db);
}
?>


        <div class="container-fluid">
            
                <div class="col-md-12">
                    <div class="page-header">
                        <h5><br><b>W celu dodania przepisu uzupełnij wszystkie pola formularza:</b></h5>
                    </div>
     
                    <form  method="POST" action="addPrzepisy.php">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Nazwa przepisu</label>
                            <input type="text" name="nazwa" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
						
						 <div class="form-group <?php echo (!empty($sklad_err)) ? 'has-error' : ''; ?>">
                            <label>Składniki</label>
                            <textarea name="składniki" class="form-control"><?php echo $sklad; ?></textarea>
                            <span class="help-block"><?php echo $sklad_err;?></span>
                        </div>
						
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Przygotowanie</label>
                            <textarea name="opis" class="form-control"><?php echo $description; ?></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
						
                        <div class="form-group <?php echo (!empty($img_err)) ? 'has-error' : ''; ?>">
                            <label>Link do zdjęcia potrawy</label>
                            <input type="text" name="img" class="form-control" value="<?php echo $img; ?>">
                           <span class="help-block"><?php echo $img_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($category_err)) ? 'has-error' : ''; ?>">
                            <label>Rodzaj przepisu</label></br>
                            <select name="rodzaj">
							<option value="wegańskie">Wegańskie</option>
		                    <option value="wytrawne">Wytrawne</option>
							<option value="słodkie">Słodkie</option>
                              
                            </select>
                        </div>
                        <input formmethod="POST" type="submit" class="btn btn-primary" value="Dodaj">
                        <a href="Konto.php" class="btn btn-info">Anuluj</a>
                    </form>
                </div>
                  
        
    </div>

		    </section>
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




