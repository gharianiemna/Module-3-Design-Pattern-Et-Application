
<?php

include_once ('connectdb.php');

class Carte extends Database {
    protected int $coutMana;
    protected int $ptsDegats;

    public function __construct(){

        self::$db = self::connectDB();

        $carte = $this->getCarte();

       

        $this->coutMana = $carte['mana'];

        $this->ptsDegats = $carte['degat'];



    }



    public function getCarte(){

        $n = rand(0,10);

        $carteStatement = self::$db->prepare('SELECT * FROM cartessort WHERE id=:id');


        $carteStatement->execute([
            'id'=> $n
        ]);

        return  $carteStatement->fetch();

    }



    public function getCoutMana(){

        return $this->coutMana;
        
    }



    public function getPtsDegats(){

        return $this->ptsDegats;

    }}