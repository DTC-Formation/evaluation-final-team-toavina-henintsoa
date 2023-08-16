<?php

    // Id , Fokontany , Kaominina, Distrika, Region, Province
    $table = [ [], [], [], [], [], [] ];
    $title;
    $file = fopen("./assets/data.csv", "r");

    // On test l'echec de l'overture du fichier
    if ( !$file ) {
        die("Erreur lors de l'overture du fichier data.csv");
    }

    // ON lit la premiere ligne
    $title = fgetcsv($file, null, ";");

    $index = 0;
    while ( !feof($file)) {
        // On ligne une ligne
        $row = fgetcsv($file, null, ";");

        // ON copie la ligne dans data
        $table[$index][0] = $row[0]; // id
        $table[$index][1] = $row[1]; // Fokontany
        $table[$index][2] = $row[2]; // KAOMININA 
        $table[$index][3] = $row[3]; // Distrika
        $table[$index][4] = $row[4]; // Regioon
        $table[$index][5] = $row[5]; // Province

        // On incremente la position la taille du tableau
        ++$index;
    }
    fclose( $file );

    function rechercheFokontany( $table, string $value) { // cad table[indice] [1]
        //Pour stocker les resultats trouves
        $results = [];

        // Position du resultat dans le tableau
        $counter = 0;

        for ($i = 0; $i <count($table); ++$i ) {
            if ( $table[$i] [1] === $value) {
                $results [$counter] = $table[$i];

                // On incremente la position
                $counter++;
            }
        }

        return $results;
    }

    function rechercheDistrika($table, string $value) { // cad table[indice] [2]
        // On transforme value en miniscule
        // $value = 
        //Pour stocker les resultats trouves
        $results = [];

        // Position du resultat dans le tableau
        $counter = 0;

        for ($i = 0; $i <count($table); ++$i ) {
            if ( $table[$i] [3] === $value) {
                $results [$counter] = $table[$i];

                // On incremente la position
                $counter++;
            }
        }
        
        return $results;
    }

    function rechercheRegion($table, string $value) { // cad table[indice] [2]
        // On transforme value en miniscule
        // $value = 
        //Pour stocker les resultats trouves
        $results = [];

        // Position du resultat dans le tableau
        $counter = 0;

        for ($i = 0; $i <count($table); ++$i ) {
            if ( $table[$i] [4] === $value) {
                $results [$counter] = $table[$i];

                // On incremente la position
                $counter++;
            }
        }
        
        return $results;
    }

    function rechercheKaominina($table, string $value) { // cad table[indice] [2]
        // On transforme value en miniscule
        // $value = 
        //Pour stocker les resultats trouves
        $results = [];

        // Position du resultat dans le tableau
        $counter = 0;

        for ($i = 0; $i <count($table); ++$i ) {
            if ( $table[$i] [2] === $value) {
                $results [$counter] = $table[$i];

                // On incremente la position
                $counter++;
            }
        }
        
        return $results;
    }

    /**
     * @param Array $table tableau dans lequel on fait la recherche
     * @param string $value le province a rechercher
     * @return Array $results liste des data qui a le meme province trouve
     */
    
    function rechercheProvince($table, string $value) { // cad table[indice] [2]
        // On transforme value en miniscule
        // $value = 
        //Pour stocker les resultats trouves
        $results = [];

        // Position du resultat dans le tableau
        $counter = 0;

        for ($i = 0; $i <count($table); ++$i ) {
            if ( $table[$i] [5] === $value) {
                $results [$counter] = $table[$i];

                // On incremente la position
                $counter++;
            }
        }
        
        return $results;
    }
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./assets/img/logo.jpg">
	<!-- css-->
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<!-- script-->
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/index.js"></script>
	<script type="text/javascript" src="./assets/bootstrap/bootstrap5/js/bootstrap.min.js"></script>
	<!-- bootstrap icons files-->
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap-icons/bootstrap-icons.css">

	<link rel="icon" href="./assets/img/icon.png">
	<title>Madagasikara</title>
</head>

<body>
	<!-- ======= Header ======= -->
	

	<header>
		<nav class="navbar navbar-expand-lg bg-dark">
			<div class="container">
			  <a class="navbar-brand">Madagasikara</a>
			</div>
		</nav>
	</header>
	<div class="container-fluid vh-100 d-flex justify-content-center flex-column">
		<!-- Barre de recherche-->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-6 offset-lg-4 offset-md-4">
					<div class="input-group mb-3">
					   <input type="text" class="form-control ">
					   <a href="./list.php"><button type="button" class="btn btn-primary"><span class="bi bi-search"></span></button></a>
				  	</div>
	
				</div>
			</div>
		
		<!-- Photo-->
			<div class="row">
				<div class="col-lg-3 col-md-4 col-xs-6 offset-lg-2 ">
					<div class="item">
						<img src="./assets/img/img1.jpg" alt="town" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-xs-6">
					<div class="item">
						<img src="./assets/img/img2.jpg" alt="town" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-xs-6">
					<div class="item">
						<img src="./assets/img/img3.jpg" alt="town" class="img-fluid">
					</div>
				</div> 
			</div>
			<!-- Photo-->
			<div class="row">
				<div class="col-lg-3 col-md-4 col-xs-6 offset-lg-2 ">
					<div class="item">
						<img src="./assets/img/img4.jpg" alt="town" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-xs-6">
					<div class="item">
						<img src="./assets/img/img5.jpg" alt="town" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-xs-6">
					<div class="item">
						<img src="./assets/img/img6.jpg" alt="town" class="img-fluid">
					</div>
				</div> 
			</div>
	</div>
	
	
	<!-- =======  End Header ======= -->

</body>

</html>