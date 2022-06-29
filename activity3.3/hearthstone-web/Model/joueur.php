<?php

include('cartesdb.php');

class Joueur {

    private int $ptsVie = 30;

    private int $ptsMana = 10;

    private array $deck = array();

    private array $monstresPlace = array();

    private array $main = array();

    private int $n=0;

    public function __construct(){

        $carteA = new Carte();

        for ($i=0; $i < 3; $i++) {

            $this->main[] = $carteA->getCarte();

        }
        $carteB = new Carte();
        for ($i=0; $i < 3; $i++) {

            $this->deck[] = $carteB->getCarte();

        }

    }



    public function getDeck(){

        return $this->deck;    }



    public function montrerMain(){

        return $this->main;  
          print_r ($main) ; }



    public function piocher(){

        $this->main[] = $this->deck[$this->n];
        unset($this->deck[$this->n]);
        $this->n++;
        echo $this->n;  }
            
            public function jouer(Joueur $joueur,int $n){



                // foreach($this->main as $key => $value){
        
                //     if($key === $n && $this->ptsMana >= $value->getCoutMana()){
        
                //         $joueur->ptsVie = $joueur->ptsVie - $value->getPtsDegats();
        
                //         $this->ptsMana = $this->ptsMana - $value->getCoutMana();
        
                //         unset($this->main[$key]);
        
                //     }    }

                    foreach($this->main as $key => $value){
                        if ($key == $n && $this->ptsMana >= $value['mana'] ) {
                            $joueur->ptsVie = $joueur->ptsVie - $value['degat'];
                            $this->ptsMana = $this->ptsMana - $value['mana'];
                            unset($this->main[$key]);
                        }
                    }
        
                $this->ptsMana = 10;    }
        
        
        
            public function afficherJoueur(){
        
                $joueurData =[
        
                    'main' => $this->main,
        
                    'ptsVie' => $this->ptsVie,
        
                    'ptsMana' => $this->ptsMana,
        
                    'deck' => $this->deck
        
                ];
        
                return $joueurData;
        
            }
        
  public function setjoueur($main,$ptsVie,$ptsMana,$deck){
    $this->main= $main ;
    $this->ptsVie= $ptsVie ;
    $this->ptsMana= $ptsMana ;
    $this->deck= $deck ;

  }
       }