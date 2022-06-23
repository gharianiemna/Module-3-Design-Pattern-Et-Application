<?php
        $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 
          'root', '');
        $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
          . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
          . ' order by BIL_ID desc');
        foreach ($billets as $billet): ?>
          <article>
            <header>
              <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
              <time><?= $billet['date'] ?></time>
            </header>
            <p><?= $billet['contenu'] ?></p>
          </article>
          <hr />
        <?php endforeach; ?>
        require 'Modele.php';

$billets = getBillets();

        <?php $artis=getArticles(3);?>
<?php foreach($artis as $art):?>
    
        <h2> Titre : <?php echo $art['titre'] ?></h2>
        <h4> Par :<?php echo $art['auteur'] ?></h4>
        <h6> Le <?php echo  $art['date_publication'] ?></h6>
        <p><?php echo $art['texte'] ?></p>
        <a  class="btn btn-danger" href="delete_post.php?id=<?php echo $art['id']?>">Supprimer</a>
<?php endforeach ?>