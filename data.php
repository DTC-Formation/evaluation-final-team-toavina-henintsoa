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
        $table[$index][0] = $row[0]; // id
        $table[$index][1] = $row[1]; // Fokontany
        $table[$index][2] = $row[2]; // KAOMININA 
        $table[$index][3] = $row[3]; // Distrika
        $table[$index][4] = $row[4]; // Regioon
        $table[$index][5] = $row[5]; // Province

        // On incremente la position la taille du tableau
        ++$index;
    }

    // On ferme le fichier
    fclose( $file );
?>