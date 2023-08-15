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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <?php
            for ($i=0; $i<count($table); $i++) {
                for ($j=0; $j<6; $j++)
                    echo $table[$i][$j] . " ";
                echo '<br>';
            }
        ?>
        
    </div>
</body>
</html>