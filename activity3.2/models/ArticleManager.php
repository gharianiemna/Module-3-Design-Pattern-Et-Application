<?php

class ArticleManager extends Article {

    public function getArticles(){
        $this->getBdd();
        return $this->getAll('articles', 'Article');
    }
}