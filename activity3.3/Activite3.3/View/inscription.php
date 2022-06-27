
<?php 

if ( isset($_POST['signup'])) {
    try
{
    // on va inserer dans la base de donnée dans le tableau, dans les colonnes les values qui sont les valeurs ecrite par utilisateur
    $sqlQuery = 'INSERT INTO user(mail,login,password) VALUES (:mail,:login, :password)';
    
    $insertUser= $db->prepare($sqlQuery);
    $hashed_password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $insertUser->execute([
        'login' => $_POST['login'],
       
        'mail' => $_POST['mail'],
        'Password' => $hashed_password,
        ]);
        // to direct the inscription page to the profile page after signup
        $user_signup = [
          'Name' => $_POST['name'],

          'mail' => $_POST['mail'],
          'Password' => $hashed_password,
        ];
       
}

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
}

    ?>
    