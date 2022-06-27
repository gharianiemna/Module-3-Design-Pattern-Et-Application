<?php
class  Database { 
    public static $db ;

    public function __construct(){
        self::$db = self::connectDB();
       
    }

    public static function connectDB(){

        if (is_null(self::$db)) {
            try
            {
                self::$db  = new PDO('mysql:host=localhost;dbname=hearthstone;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            { 
                die('Erreur : ' . $e->getMessage());
            }
        }
        return  self::$db ;
    }
}