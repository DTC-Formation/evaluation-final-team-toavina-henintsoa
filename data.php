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
        // On lit une ligne
        $row = fgetcsv($file, null, ";");

        // On copie la ligne dans la table
        for($i=0; $i<6; $i++) {
            $table[$index] [$i] = $row[$i];
        }

        // On incremente la position la taille du tableau
        ++$index;
    }

    // On ferme le fichier
    fclose( $file );
?>