<?php
include_once('../singleton/singleton.php');

 class Article {
  private $article;
  private  $db;
  public static $conn;


 public function __construct(){
    $this->db = $this->getDb();
    self::$conn = self::getDbSing();

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
 
        public function getArticles(){
            $articlesStatement = $this->db->prepare('SELECT * FROM articles');
            $articlesStatement->execute();
            $articles = $articlesStatement->fetchAll();
            $this->article = $articles;
            return $this->article;
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
    // SINGLETON      
public static function getDbSing(){
            if (is_null(self::$conn)) {
                try
                {
                    self::$conn = new PDO('mysql:host=localhost;dbname=emnadatabase;charset=utf8', 'root', '');
                }
                catch (Exception $e)
                { 
                    die('Erreur : ' . $e->getMessage());
                }
            }
            return self::$conn;
        }
          public function getArticleSing(){
            $articlesStatement =self::$conn->prepare('SELECT * FROM articles');
            $articlesStatement->execute();
            $articles = $articlesStatement->fetchAll();
            $this->article = $articles;
            return $this->article;
         
        }
        
          public function ajouterArticleSing($titre, $text, $auteur, $date_publication) {
 
            $articlesStatement = self::$conn->prepare('INSERT INTO articles(titre, texte, auteur, date_publication) Values (:titre, :texte, :auteur, :date_publication) ');
            $articlesStatement->execute([
              'titre' => $titre,
              'texte' => $text,
              'auteur' => $auteur,
              'date_publication' => $date_publication, 
          ]);
          }
        }

