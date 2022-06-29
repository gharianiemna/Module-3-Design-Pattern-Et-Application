<?php
include_once ('connectdb.php');
class  UserModel extends Database{ 
protected $user;
protected $login;
protected $mail;    // using protected so they can be accessed
protected $password; // and overidden if necessary


    
        public function __construct()
        {   self::$db = self::connectDB();
            $this->user =$this->getUser();
        }
    
        public function getUser(){
            $userStatement = self::$db->prepare('SELECT * FROM user');
            $userStatement->execute();
            $users = $userStatement->fetchAll();
            $this->user = $users;
            return $this->user;
        }
    
     
        public function signUp( $mail, $login, $password){
                // on va inserer dans la base de donnée dans le tableau, dans les colonnes les values qui sont les valeurs ecrite par utilisateur
                $sqlQuery = 'INSERT INTO user(mail, login,  password) VALUES ( :mail,:login,:password)';
                $insertUser=self::$db->prepare($sqlQuery);
                $hashed_password=password_hash($password, PASSWORD_DEFAULT);
                $insertUser->execute([
                    'mail' => $mail,
                    'login' => $login,
                    'password' => $hashed_password,
                    ]);
                }
            }