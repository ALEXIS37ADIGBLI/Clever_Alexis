<?php 

// Récupération des nombres depuis l'URL
if (isset($_GET['numbers'])) {
    $numbers = explode(',', $_GET['numbers']); // On va enlever les ,

    foreach ($numbers as $number) {
        if ($number % 2 == 0) { //Vérifions si le nombre est paire
            echo '<br>'.$number;
        }
    }
} else {
    echo "Aucun nombre fourni dans l'URL.";
}

?>

