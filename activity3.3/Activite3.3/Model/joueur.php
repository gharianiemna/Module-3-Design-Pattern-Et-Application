<?php

include('cartesdb.php');
include_once ('../Model/deck.php');

class Joueur {

    private int $ptsVie = 30;

    private int $ptsMana = 10;
  private array $deck = array();
    private array $monstresPlace = array();

    private array $main = array();



    public function __construct(){

        $carte = new Carte();

        for ($i=0; $i < 3; $i++) {

            $this->main[] = $carte->getCarte();

        }

        for ($i=0; $i < 30; $i++) {

            $this->deck[] = $carte->getCarte();

        }

    }



    public function getDeck(){

        return $this->deck;    }



    public function montrerMain(){

        return $this->main;    }

        public function piocher(){
            $this->main[] = $this->deck[0];
            unset($this->deck[0]);
    }


    public function jouer(Joueur $joueur,int $n){

        foreach($this->main as $key => $value){
            if($key === $n && $this->ptsMana >= $value->getCoutMana()){
                $joueur->ptsVie = $joueur->ptsVie - $value->getPtsDegats();
                $this->ptsMana = $this->ptsMana - $value->getCoutMana();
                unset($this->main[$key]);
            }    }
        $this->ptsMana = 10;    }


        // function lancer( Joueur  $joueur ){
        //     $array = array();
        //     while ($this->ptsVie > 0 && $joueur->ptsVie > 0)
        //     { $this->piocher();
        //     foreach($this->main as $key => $value){
        //         $array[]= $value->getCoutMana();
        //     }
        //     while($this->ptsMana >= min($array) && count($this->main) > 0){
        //     $this->montrerMain();
        //         $this->jouer($this->joueur, (int)$entree);
        //         $array = array();
        //         foreach($this->main as $key => $value){
        //             $array[]= $value->getCoutMana();
        //         }
        //     }
        //     $this->ptsMana = 10;}
        //         }
            

    public function afficherJoueur(){
        $joueurData =[
            'main' => $this->main,
            'ptsVie' => $this->ptsVie,
            'ptsMana' => $this->ptsMana,
            'deck' => $this->deck
        ];
        return $joueurData;
    }

}

      