<?php


include('monstre.php');
include('sort.php');

class Joueur {
    public array $joueur_data;
    public int $id_joueur ;
    public string $pseudo;
    public int $ptsVie ;
    public int $ptsMana;
    public int $user_id ;
    private array $monstresPlace = array();
    public array $main = array();

    public function __construct(){
        $this->joueur_data = $this->getJoueur();
        $this->id_joueur = $this->getJoueur();
        $this->pseudo = $this->getJoueur();
        $this->ptsVie = $this->getJoueur();
        $this->ptsMana = $this->getJoueur();
    }

    
    public function getJoueur($id){
        $joueurStatement = self::$db->prepare('SELECT id, ptsVie, CoutMana, user_id, pseudo FROM Joueur where id = :id');
        $joueurStatement->execute([
            'id'=>$id
        ]);
        $joueurs = $joueurStatement->fetchAll();
        $this->joueur_data = $joueurs;
        $this->id_joueur = $this->joueur_data[0];
        $this->ptsVie = $this->joueur_data[1];
        $this->ptsMana = $this->joueur_data[2];
        $this ->user_id =  $this->joueur_data[3];
        $this->pseudo = $this->joueur_data[4];
        return $this->joueur_data;
    }
    
    public function montrerMain(){
        $str='';
        foreach($this->main as $key => $value){
            $str = $str . 'Sort n°'. $key . ':'.PHP_EOL.'Cout Mana : ' . $value->getCoutMana().PHP_EOL.
            'Points degats : '.$value->getPtsDegats().PHP_EOL;
        }
        echo $str;
    }

    public function piocher(){
            // $rand=rand(0,1);
            // if($rand == 0){
            //     $this->main[] = new Sort();
            // }
            // else{
            //     $this->main[] = new Monstre();
            // }
            $this->main[] = new Sort();
            
    }

    public function jouer(Joueur $joueur,int $n){
        foreach($this->main as $key => $value){
            if($key === $n && $this->ptsMana >= $value->getCoutMana()){
                $joueur->ptsVie = $joueur->ptsVie - $value->getPtsDegats();
                $this->ptsMana = $this->ptsMana - $value->getCoutMana();
                unset($this->main[$key]);
            } 
        }
        // $this->ptsMana = 10;
    }


    public function getMonstresPlace(){
        return $this->monstresPlace;
    }

    public function placerMonstre(Monstre $monstre){

        if( count($this->monstresPlace)  < 5 ){
            $this->monstresPlace[] = $monstre;
            $this->ptsMana = $this->ptsMana - $monstre->getCoutMana();
        }
    }


    public function __toString(){
        $str='';
        // foreach($this->monstresPlace as $key => $value){
        //     $str = $str . 'Monstre n°'. (intval($key) + 1) . ':'.PHP_EOL.'Cout Mana : ' . $value->getCoutMana().PHP_EOL.'Points vie : '.
        //     $value->getPtsVie().PHP_EOL.'Points degats : '.$value->getPtsDegats().PHP_EOL;
        // }
        // foreach($this->main as $key => $value){
        //     $str = $str . 'Sort n°'. (intval($key) + 1) . ':'.PHP_EOL.'Cout Mana : ' . $value->getCoutMana().PHP_EOL.
        //     'Points degats : '.$value->getPtsDegats().PHP_EOL;
        // }
        return 'Joueur : '. $this->pseudo .PHP_EOL. 'Pts Vie:' . $this->ptsVie . PHP_EOL. 'Pts Mana :'. $this->ptsMana .PHP_EOL. $str;
    }

    
    // public function getJoueur()
    // {
    //     $joueur_id = int;
    //     $user_id = int;
    //    // Une table stocke les users, et une table stocke les joueurs.
    //    //La table joueurs contient entre-autres un champ "idx_user", 
    //    //qui contient l'id correspondant au user qui devient joueur.

    //     $q = self::$db->query('SELECT * FROM joueur JOIN userdata on id_user = idx_user');
         
    //     while ($data = $q->fetch())
    //     {
    //         $id_user = new joueur($data);
             
    //         if (!isset($user_id['id_user']))
    //         {
    //             $user_id[$data['id_user']] = new joueur($data);
    //         }
             
    //         $news->setJoueur($user_id[$data['id_user']]);
    //     }
         
    //     return $news;
    // }
}










