<<<<<<< HEAD
<?php
class  UserModel { 
protected $user;
protected $login;
protected $_mail;    // using protected so they can be accessed
protected $_password; // and overidden if necessary


    
        public function __construct()
        {
            $this->user =$this->getUser();
          
        }
    
        public function getUser(){
            $userStatement = self::$db->prepare('SELECT * FROM userdata');
            $userStatement->execute();
            $users = $userStatement->fetchAll();
            $this->user = $users;
            return $this->user;
        }
    
     
        public function signUp($login, $mail, $Password){
                // on va inserer dans la base de donnée dans le tableau, dans les colonnes les values qui sont les valeurs ecrite par utilisateur
                $sqlQuery = 'INSERT INTO userdata(login, mail, Password) VALUES (:login, :mail, :Password)';
                $insertUser= $db->prepare($sqlQuery);
                $hashed_password=password_hash($password, PASSWORD_DEFAULT);
                $insertUser->execute([
                    'login' => $login,
                    'mail' => $mail,
                    'Password' => $hashed_password,
                    ]);
                    // to direct the inscription page to the profile page after signup
                    // $user_signup = [
                    //   'login' => $_POST['login'],
                    //   'mail' => $_POST['mail'],
                    //   'Password' => $hashed_password,
                    // ];
                    $_SESSION['login_user'] = $user_signup;
                      header('LOCATION:signinController.php'); die();
        }   
    
    
        public function login()
        {
            $user = $this->_checkCredentials();
            if ($user) {
                $this->_user = $user; // store it so it can be accessed later
                $_SESSION['user_id'] = $user['id'];
                return $user['id'];
            }
            return false;
        }
    
        protected function _checkCredentials()
        {
            $stmt = $this->_db->prepare('SELECT * FROM users WHERE mail=?');
            $stmt->execute(array($this->mail));
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $submitted_pass = sha1($user['salt'] . $this->_password);
                if ($submitted_pass == $user['password']) {
                    return $user;
                }
            }
            return false;
        }
        // a verifier
        //     public function signIn($mail, $Password){
        //         $mail = $_POST['mail']; 
        //         $password = $_POST['password'];
        //         $sqlQuery = 'SELECT * FROM userdata WHERE mail = :mail';
        //         $user = $db->prepare($sqlQuery);
        //         $user->execute([
        //             'mail' => $mail
        //         ]);
        //         $user=$user->fetchAll();
        //         // print_r($user);
        //         if($mail === $user[0]['mail'] && (password_verify($password, $user[0]['Password']))){
                 
        //           $_SESSION['login_user'] = $user[0];
                  
        //           // $_SESSION['login'] = $user[0]['login'];
        //           header('LOCATION:index.php'); die();
        
        //           if ($_POST['se_souvenir_de_moi']) {
        //             $timestamp_expire = time() +365*24*3600; // Le cookie expirera dans un an
        //             setcookie('identifiant_connexion',  $_POST['mail'], $timestamp_expire); // On écrit un cookie
        //             setcookie('password_connexion', $_POST['password'], $timestamp_expire);
                
               
        //         }
        //     }
        // }
        public function setSession()
        {
            $_SESSION['user'] = [
                'id' => $this->id,
                'mail' => $this->mail,
              
            ];
        }
    

    
        
}
    
=======
<?php
class  UserModel { 
protected $user;
protected $_email;    // using protected so they can be accessed
protected $_password; // and overidden if necessary


    
        public function __construct()
        {
            $this->user =$this->getUser();
          
        }
    
        public function getUser(){
            $userStatement = $this->db->prepare('SELECT * FROM userdata');
            $userStatement->execute();
            $users = $userStatement->fetchAll();
            $this->user = $users;
            return $this->user;
        }
    
     
        public function signUp($Name, $Email, $Password){
                // on va inserer dans la base de donnée dans le tableau, dans les colonnes les values qui sont les valeurs ecrite par utilisateur
                $sqlQuery = 'INSERT INTO userdata(Name, Email, Password) VALUES (:Name, :Email, :Password)';
                $insertUser= $db->prepare($sqlQuery);
                $hashed_password=password_hash($password, PASSWORD_DEFAULT);
                $insertUser->execute([
                    'Name' => $Name,
                    'Email' => $Email,
                    'Password' => $hashed_password,
                    ]);
                    // to direct the inscription page to the profile page after signup
                    // $user_signup = [
                    //   'Name' => $_POST['name'],
                    //   'Email' => $_POST['email'],
                    //   'Password' => $hashed_password,
                    // ];
                    $_SESSION['login_user'] = $user_signup;
                      header('LOCATION:index.php'); die();
        }   
        public function login()
        {
            $user = $this->_checkCredentials();
            if ($user) {
                $this->_user = $user; // store it so it can be accessed later
                $_SESSION['user_id'] = $user['id'];
                return $user['id'];
            }
            return false;
        }
    
        protected function _checkCredentials()
        {
            $stmt = $this->_db->prepare('SELECT * FROM users WHERE email=?');
            $stmt->execute(array($this->email));
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $submitted_pass = sha1($user['salt'] . $this->_password);
                if ($submitted_pass == $user['password']) {
                    return $user;
                }
            }
            return false;
        }
        // a verifier
        //     public function signIn($Email, $Password){
        //         $email = $_POST['email']; 
        //         $password = $_POST['password'];
        //         $sqlQuery = 'SELECT * FROM userdata WHERE email = :email';
        //         $user = $db->prepare($sqlQuery);
        //         $user->execute([
        //             'email' => $email
        //         ]);
        //         $user=$user->fetchAll();
        //         // print_r($user);
        //         if($email === $user[0]['Email'] && (password_verify($password, $user[0]['Password']))){
                 
        //           $_SESSION['login_user'] = $user[0];
                  
        //           // $_SESSION['name'] = $user[0]['name'];
        //           header('LOCATION:index.php'); die();
        
        //           if ($_POST['se_souvenir_de_moi']) {
        //             $timestamp_expire = time() +365*24*3600; // Le cookie expirera dans un an
        //             setcookie('identifiant_connexion',  $_POST['email'], $timestamp_expire); // On écrit un cookie
        //             setcookie('password_connexion', $_POST['password'], $timestamp_expire);
                
               
        //         }
        //     }
        // }
        public function setSession()
        {
            $_SESSION['user'] = [
                'id' => $this->id,
                'email' => $this->email,
              
            ];
        }
    
        public function getUser(){
            $userStatement = $this->db->prepare('SELECT * FROM userdata');
            $userStatement->execute();
            $users = $userStatement->fetchAll();
            $this->user = $users;
            return $this->user;
        }
    
        
}
    
>>>>>>> e25684a29d7aed9310d5dff65b109a913420fd61
   