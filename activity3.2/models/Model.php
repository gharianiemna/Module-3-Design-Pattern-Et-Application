<?php

    abstract  class Article{

        private $db;
        // instance à la connexion à la base de données
        public static function setBdd(){
            self::$db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
            self::$db->setAttribute(PDO::ATTR_ARRMODE, PDO::ERRMODE_warning);
        }
        // recupere la connection à la bdd
        protected function getBdd(){
    if ( self::$db ==null) {
        $this->setBdd();
        return  self::$db ;
    }
        }
    //methode qui permet de recuperer toutes les données d'une table
    protected function getAll($table, $obj){
        $var=[];
        $req=self::$db->prepare('SELECT * FROM'.table.'OREDER BY id DESC');
        $req->excute();
        while($data= $req->excute(PDO::FETCH_ASSOC)){
            $var[]=new $obj($data);
        }
        return $var;
        $req->closeCursor();
            }
            function getArticles() {
                $bdd = getBdd();
                $articles = $bdd->prepare('select id as id, titre as titre, texte as texte, auteur as auteur, date_publication as date from articles'
                  );
                $articles->execute(array());
                return $articles;
              }
              
            function getCommentaires($id) {
                $bdd = getBdd();
                $commentaires = $bdd->prepare('select COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
                  . ' where BIL_ID=?');
                $commentaires->execute(array($id));
                return $commentaires;
              }
              
}