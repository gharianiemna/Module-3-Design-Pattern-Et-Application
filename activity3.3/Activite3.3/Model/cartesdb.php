<?php

abstract class Carte {
    public $cartedb;
    protected int $coutMana;
    protected int $ptsDegats;

    function __construct(){
        $this->coutMana =$this->getCoutmana();
        $this->ptsDegats = $this->getPtsDegats();
    }


    function getCoutmana(){
        $this->coutManaStatement=self::$db->prepare('SELECT mana FROM cartessort WHERE id= rand(1,10)');
        $coutManaStatement->execute();
        $manas = $coutManaStatement->fetchAll();
        $this->coutMana = $manas;
        return $this->coutMana;
    }

    function getPtsDegats(){
        $this->ptsDegatsStatement=self::$db->prepare('SELECT degat FROM cartessort WHERE id= rand(1,10)');
        $ptsDegatsStatement>execute();
        $Degats = $ptsDegatsStatement->fetchAll();
        $this->ptsDegats = $Degats;
        return $this->ptsDegats;
    }

    function getCartes(){
        $cartesStatement = self::$db->prepare('SELECT * FROM cartessort');
        $cartesStatement->execute();
        $cartes = $cartesStatement->fetchAll();
        $this->cartedb = $cartes;
        return $this->cartedb;
    }

}
