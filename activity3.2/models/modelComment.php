<?php

class Commentaire{

    private $db;
    // instance à la connexion à la base de données
    public static function setBdd(){
        $this->db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
        self::$db->setAttribute(PDO::ATTR_ARRMODE, PDO::ERRMODE_warning);
    }
    // recupere la connection à la bdd
    protected function getBdd(){
  if ( self::$db ==null) {
    $this->setBdd();
    return  self::$db ;
  }
    }
    public function getCommentaire() {
      $bdd = getBdd();
      $getcomment = $bdd->prepare('SELECT * FROM commentaire WHERE article_id = :id');;
      $getcomment->execute(['id'=>$art['id'] ]);
      $comment=$getcomment->fetchAll();
      return $comment;
    }
     


  public function ajouterCommentaire($auteur, $contenu, $idArticle) {
    $insertComment= $bdd->prepare('INSERT INTO commentaire(texte, auteur, date_publication, article_id) Values (:texte, :auteur, :date_publication, :article_id) ');
        $date = date(DATE_W3C);  // Récupère la date courante
        $insertcomment->execute([
            'texte' => $contenu,
            'auteur' => $auteur,
            'date_publication' => $date, 
            'article_id' => $idArticle

        ]);
      }
    }

 