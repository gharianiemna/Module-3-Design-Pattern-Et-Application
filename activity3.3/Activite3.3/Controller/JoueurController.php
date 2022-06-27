<?php

include_once ('../Model/joueur.php');
include_once ('../Model/deck.php');


$joueurA = new Joueur();
$joueurDataA = $joueurA->afficherJoueur();
$mainA = $joueurDataA['main'];


$joueurB = new Joueur();
$joueurDataB = $joueurB->afficherJoueur();
$mainB = $joueurDataB['main'];


// if ( isset($_GET['action']) && $_GET['action'] == 'submit') {
//     $obj =new Deck();
//     $t=$obj->getDeck();
//     print_r($t);
// }

// if (isset($_GET['id']) && isset ($_GET['joueur']) == 'A') {

//     echo "joueur A attaque";
//     $joueurA->jouer($joueurB, ($_GET['id']));
// }
// elseif(isset($_GET['id']) && isset ($_GET['joueur']) == 'B'){
//     $joueurB->jouer($joueurA, ($_GET['id']));
// }






require_once('../View/table.php');