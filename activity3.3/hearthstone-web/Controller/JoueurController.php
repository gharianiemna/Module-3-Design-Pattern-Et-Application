<?php
session_start();
// session_unset();
// session_destroy();
include_once ('../Model/joueur.php');
include_once ('../Model/UserModel.php');

$myusers = new UserModel();
if ( isset($_POST['submitSignIn'])) {
    $myusers->signUp($_POST['mail'], $_POST['login'],$_POST['password']);
}

 if ( !isset( $_SESSION['joueur'] ) ){
 $joueurA = new Joueur();
$_SESSION['joueurDataA'] = $joueurA->afficherJoueur();
$mainA = $_SESSION ['joueurDataA']['main'];

$ptsVieA= $_SESSION ['joueurDataA']['ptsVie'];
$ptsManaA= $_SESSION ['joueurDataA']['ptsMana'];

    $joueurB = new Joueur();
    $_SESSION ['joueurDataB'] = $joueurB->afficherJoueur();
    $mainB = $_SESSION ['joueurDataB']['main'];}
else {
  
    $joueurA= new Joueur();
    $_SESSION ['joueurDataA'] = $joueurA->setjoueur($_SESSION ['joueurDataA']['main'],$_SESSION ['joueurDataA']['ptsVie'],$_SESSION ['joueurDataA']['ptsMana'],$_SESSION ['joueurDataA']['deck']);
    $mainA= $_SESSION ['joueurDataA']['main'];
    $ptsVieA= $_SESSION ['joueurDataA']['ptsVie'];
    $ptsManaA= $_SESSION ['joueurDataA']['ptsMana'];
    $deckA= $_SESSION ['joueurDataA']['deck'];
    $joueurB= new Joueur();
    $_SESSION ['joueurDataB'] = $joueurA->setjoueur($_SESSION ['joueurDataB']['main'],$_SESSION ['joueurDataB']['ptsVie'],$_SESSION ['joueurDataB']['ptsMana'],$_SESSION ['joueurDataB']['deck']);
    $mainB= $_SESSION ['joueurDataB']['main'];
    $ptsVieB= $_SESSION ['joueurDataB']['ptsVie'];
    $ptsManaB= $_SESSION ['joueurDataB']['ptsMana'];
    $deckB= $_SESSION ['joueurDataB']['deck'];
}
$array =array();
foreach($mainA as $carte){
    $array[]= $carte['mana'];}

if(isset($_Post['PlayA']) ) {
  if ($_SESSION ['joueurA']['ptsMana'] >=min ($array) && count($mainA)){
     $joueurA->jouer($joueurB , $_Post['id_A']);
     $_SESSION ['joueurA'] = $joueurA->afficherJoueur();
     $_SESSION ['joueurB'] = $joueurB->afficherJoueur();
     $mainA= $_SESSION ['joueurDataA']['main'];
     $ptsVieA= $_SESSION ['joueurDataA']['ptsVie'];
     $ptsManaA= $_SESSION ['joueurDataA']['ptsMana'];
     $deckA= $_SESSION ['joueurDataA']['deck'];

     $mainB= $_SESSION ['joueurDataB']['main'];
     $ptsVieB= $_SESSION ['joueurDataB']['ptsVie'];
     $ptsManaB= $_SESSION ['joueurDataB']['ptsMana'];
     $deckB= $_SESSION ['joueurDataB']['deck'];

     $array =array();
     foreach($main as $carte){
        $array[]= $carte['mana'];}
     }
    if (count($mainA)==0) { 
    
        echo "c'est le tour du joueur B ";
    } }

elseif (isset($_Post['PlayB']) ){
    $array =array();
    foreach($mainB as $carte){
    $array[]= $carte['coutMana'];}

 
  if ($_SESSION ['joueurB']['ptsMana'] >=min ($array) && count($mainB)){
     $joueurA->jouer($joueurA , $_Post['id_B']);
     $_SESSION ['joueurB'] = $joueurB->afficherJoueur();
     $_SESSION ['joueurA'] = $joueurA->afficherJoueur();
     $mainA= $_SESSION ['joueurDataA']['main'];
     $ptsVieA= $_SESSION ['joueurDataA']['ptsVie'];
     $ptsManaA= $_SESSION ['joueurDataA']['ptsMana'];
     $deckA= $_SESSION ['joueurDataA']['deck'];

     $mainB= $_SESSION ['joueurDataB']['main'];
     $ptsVieB= $_SESSION ['joueurDataB']['ptsVie'];
     $ptsManaB= $_SESSION ['joueurDataB']['ptsMana'];
     $deckB= $_SESSION ['joueurDataB']['deck'];

     $array =array();
     foreach($main as $carte){
        $array[]= $carte['coutMana'];}
     }
    if (count($mainB)==0) { 
    
        echo "c'est le tour du joueur A ";
    } 
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['piocherA']))
 {
     $joueurA->piocher();
     $_SESSION['joueurA']=$joueurA->afficherJoueur();
     $mainA=$_SESSION['joueurA']['main'];
     $deckA=$_SESSION['joueurA']['deck'];
    }
    
   
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['piocherB']))
    {
        $joueurB->piocher();
        $_SESSION['joueurB']=$joueurB->afficherJoueur();
        $mainB=$_SESSION['joueurB']['main'];
        $deckB=$_SESSION['joueurB']['deck'];
    }

if (isset($_POST['url'])) {
    if($_POST['url'] == 'user'){
        include_once('../View/table.php');
    }else{
        include_once('../View/signin.php');
}
  
}else{
        include_once('../View/signin.php');
}