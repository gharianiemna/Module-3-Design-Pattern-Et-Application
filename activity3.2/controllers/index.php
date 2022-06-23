<?php

include_once('../Models/modelArticle.php');

$allArticles = new Article();
$artis = $allArticles->getArticles();

if (isset($_GET['url'])) {
    if ($_GET['url'] == 'home') {
        include_once('../Views/article.php');
    }
    elseif($_GET['url'] == 'posterArticle'){
        include_once('../views/form.php');
    }
}else{
    include_once('../Views/article.php');
}

if ( isset($_POST['addArticle'])) {
    $allArticles->addArticle($_POST['titre'],$_POST['text'],$_POST['auteur'],$_POST['date']);
}

$comments = new Commentaire();
$artis = $allArticles->getArticles();

if (isset($_GET['url'])) {
    if ($_GET['url'] == 'home') {
        include_once('../Views/article.php');
    }
    elseif($_GET['url'] == 'posterArticle'){
        include_once('../views/form.php');
    }
}else{
    include_once('../Views/article.php');
}

if ( isset($_POST['addArticle'])) {
    $allArticles->addArticle($_POST['titre'],$_POST['text'],$_POST['auteur'],$_POST['date']);
}