<html>
<head>
<title>header</title>
<link rel="stylesheet" type="text/css" href="style.css" media=”screen” />
</head>
<body>
<?php 
include 'header.php';
?>
<h1> Leçon 1.2 : PHP Dans Le Web </h1>
<div class="images">
<img  src="https://media.glassdoor.com/sqll/485967/talan-squarelogo-1452188470682.png" alt="W3Schools.com">
</div>



<h2>Les 3 derniers acticles sont :</h2>

<?php foreach($artis as $art):?>
    
        <h2> Titre : <?php echo $art['titre'] ?></h2>
        <h4> Par :<?php echo $art['auteur'] ?></h4>
        <h6> Le <?php echo  $art['date_publication'] ?></h6>
        <p><?php echo $art['texte'] ?></p>
        <a  class="btn btn-danger" href="delete_post.php?id=<?php echo $art['id']?>">Supprimer</a>
<?php endforeach ?>
</body>
 
        <?php
    include 'footer.php';
    ?>
</html>
