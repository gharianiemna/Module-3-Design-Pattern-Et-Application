<?php

include_once('../Models/modelArticle.php');

$allArticles = new Article();
$artis = $allArticles->getArticleSing();
// $artis = $allArticles->getArticles();

if ( isset($_POST['btn'])) {
    $allArticles->ajouterArticleSing($_POST['titre'],$_POST['text'],$_POST['auteur'],$_POST['date_publication']);
    // $allArticles->ajouterArticle($_POST['titre'],$_POST['text'],$_POST['auteur'],$_POST['date_publication']);
    header('Location:index.php');
}

        include_once('../views/article.php');