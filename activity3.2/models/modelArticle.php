<?php

 class Article{
  private $article;
  private $db;
    
        public function __construct(){
            $this->db = $this->getDb();
            $articlesStatement = $this->db->prepare('SELECT * FROM articles');
            $articlesStatement->execute();
            $articles = $articlesStatement->fetchAll();
            $this->article = $articles;
        }
    
        public function getArticles(){
            return $this->article;
        }
    
        public function getDb(){
            try
            {
                $db = new PDO('mysql:host=localhost;dbname=emnadatabase;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            } 
            return $db;
        }
    
          public function ajouterArticle($titre, $text, $auteur, $date_publication) {
 
            $articlesStatement = $this->db->prepare('INSERT INTO articles(titre, texte, auteur, date_publication) Values (:titre, :texte, :auteur, :date_publication) ');
            $articlesStatement->execute([
              'titre' => $titre,
              'texte' => $text,
              'auteur' => $auteur,
              'date_publication' => $date_publication, 
          ]);
          }
        
        }

