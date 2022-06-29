<?php 
include('connectdb.php');
class Deck extends Database{
    public $deck ;
    public function __construct()
    {   parent::__construct();
        $this->deck =$this->setDeck();
      
    }

    public function setDeck(){
        $ran=rand(1,10);
        for($i=0;$i<30;$i++){
            $deckStatement = self::$db->prepare('INSERT INTO deck_cartes (id_deck, id_carte) VALUES (1, 2)');
            $deckStatement->execute();
        }
    }
    public function getDeck(){
        $deckStatement = self::$db->prepare('SELECT *
        FROM deck_cartes
        INNER JOIN cartessort ON deck_cartes.id_carte = cartessort.id
        ');
        $deckStatement->execute();
        $decks = $deckStatement->fetchAll();
        $this->deck = $decks;
        return $this->deck;
    }
}