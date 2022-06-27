<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email']; $password = $_POST['password'];
        $sqlQuery = 'SELECT * FROM userdata WHERE email = :email';
        $user = $db->prepare($sqlQuery);
        $user->execute([
            'email' => $email
        ]);
        $user=$user->fetchAll();
        // print_r($user);
        if($email === $user[0]['Email'] && (password_verify($password, $user[0]['Password']))){
         
          $_SESSION['login_user'] = $user[0];
          
          // $_SESSION['name'] = $user[0]['name'];
          header('LOCATION:index.php'); die();

          if ($_POST['se_souvenir_de_moi']) {
            $timestamp_expire = time() +365*24*3600; // Le cookie expirera dans un an
            setcookie('identifiant_connexion',  $_POST['email'], $timestamp_expire); // On écrit un cookie
            setcookie('password_connexion', $_POST['password'], $timestamp_expire);
        
       
        }
     
        }else {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }
        
      }