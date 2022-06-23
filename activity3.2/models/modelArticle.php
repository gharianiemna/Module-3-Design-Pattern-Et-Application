<?php

 class Article{
  private $article;
  private $db;
        // instance à la connexion à la base de données
        public static function setBdd(){
            $this->db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ARRMODE, PDO::ERRMODE_warning);
        }
        // recupere la connection à la bdd
        protected function getBdd(){
    if ( $this->db==null) {
        $this->setBdd();
        return  $this->db ;
    }
        }
        
    public function getArticles() {
            $bdd = getBdd();
            $lesarticles = $bdd->prepare('SELECT id AS id, titre AS titre, texte AS texte, auteur AS auteur, date_publication AS date_publication FROM articles');
            $lesarticles->execute();
            $articles = $lesarticles->fetchAll();
            return $articles;
          }

          public function ajouterArticle($titre,  $contenu, $auteur, $date_publication) {
            $bdd = getBdd();
            $insertArticle= $bdd->prepare('INSERT INTO commentaire(texte, texte, auteur, date_publication) Values (:texte, :texte, :auteur, :date_publication) ');
            $insertArticle->execute([
              'titre' => $titre,
              'texte' => $text,
              'auteur' => $auteur,
              'date_publication' => $date_publication, 
          ]);
          }
              public function deleteArticle($id){

           
                $bdd = getBdd();
                 $sqlQuery = 'DELETE FROM articles WHERE id=:id';
                
                 $deleteArticle = $db->prepare($sqlQuery);
                 $deleteArticle->execute([
                    'id' => $_GET['id']
                 ]);
                
               
                
            

              }
}

