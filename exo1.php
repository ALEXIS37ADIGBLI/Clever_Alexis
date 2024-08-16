<?php 
//Exercice 1

$Nom = $_GET['nom'];  // Pour récuperer la valeur de la variable nom dan l'url
if(strlen($Nom)!=0 ) {  //Vérification du contenue de la variable nom
    echo "Bonjour ".$Nom; 
} else {
    echo "Bonjour invité";
}

?>