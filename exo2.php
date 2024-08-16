<?php 

//Récupération des nombres et de l'opération
$nb1 = $_GET['a'];
$nb2 = $_GET['b'];
$operation = $_GET['op'];

//initiation des opération
$add = $nb1 + $nb2; //pour addition
$sub = $nb1 - $nb2; //pour soustraction
$mul = $nb1 * $nb2; //pour multiplication
$div = $nb1 / $nb2; //pour division

// Les conditions 
if ($operation == 'add') {
    echo "La somme des deux nombre est : ".$add;
    } elseif ($operation == 'sub') {
        echo "La différence des deux nombre est : ".$sub;
    } elseif($operation =='mul'){
        echo "Le produit des deux nombre est : ".$mul;
    }elseif ($operation =='div') {
        echo "La division des deux nombre est : ".$div;
    } 

?>

