<?php
include_once('../Models/signin.php');

$users = new UserModel();
$users = $myusers->signUp();
if ( isset($_POST['submitSignIn'])) {
    $myusers->signUp($_POST['Name'],$_POST['Email'],$_POST['Password']);
    header('Location:signincontroller.php');
}

$userService = new UserModel($pdo, $_POST['email'], $_POST['password']);
if ($user_id = $userService->login()) {
    echo 'Logged it as user id: '.$user_id;
    $userData = $userService->getUser();
    // do stuff
} else {
    echo 'Invalid login';
}
include_once('../View/connexion.php');
include_once('../View/inscription.php');