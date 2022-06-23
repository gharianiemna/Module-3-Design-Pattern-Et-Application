<?php
class Database implements Singleton {
    private static $instance;
    private $db;

    private function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->db;
    }
}