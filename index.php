<?php

    // id , Fokontany , Kaominina, Distrika, Region, Province
    $table = [ [], [], [], [] ];
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
        $table[$index][0] = $row[0];
        $table[$index][1] = $row[1];
        $table[$index][2] = $row[2];
        $table[$index][3] = $row[3];
        $table[$index][4] = $row[4];
        $table[$index][5] = $row[5];

        // On incremente la position la taille du tableau
        ++$index;
    }

    fclose( $file );

    print_r( $title );
    print_r( $table );
?>