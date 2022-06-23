<?php

require '../models/Model.php';
class ControllerAcceuil {
    private $_articleManager;
    private $_view;
    public function __construct($url){
        if(isset($url)&& count($url)>1){
            throw new Excpetion ('page introvable');
        }else{
            $this->article();
        }
    }
    private Function articles(){
        $this->_articleManager =new ArticleManager;
        $articles =$this-> _articleManager->getArticles();
        require_once('views/article.php');
    }
}