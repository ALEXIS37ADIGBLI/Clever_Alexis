<?php 

//Récupération du nombre n
$nb = $_GET['n'];

if(strlen($nb)!=0){ //Pour controler si l'utilisateur a entré un nombre
    for($i=1; $i<=10;$i++) {
        echo'<br>'. $i . " x " . $nb . " = " . $i*$nb; //Il ecrit les deux nombre et apres le signe d'égalisation il affiche leur produit
    }
} else {
    echo "Veuillez renseigner un nombre";
}

?>
