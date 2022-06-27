
<?php include_once('../Model/joueur.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hearthstone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="home">
  <div class="cartes">
  <div>
<h2>joueurA</h2>
<h6>Pts Vie : <?=$joueurDataA['ptsVie']; ?> </h6>
  <h6>Pts Mana : <?=$joueurDataA['ptsMana']; ?> </h6>
<div class="d-flex flex-row">

   <?php foreach ($mainA as $carte) :?>
  <div class="p-2">  
    <div class="card" style="width: 10rem;height:20rem">
      <img class="card-img-top" src="<?php echo $carte['image']?>" alt="Card image cap"style="height:150px">
      <div class="card-body">
        <h5 class="mana" style= "font-size: 17px;">cout mana : <?=$carte['mana']; ?></h5>
        <h5 class="ptsdommage"style= "font-size: 17px;">point degat :<?= $carte['degat'] ?></h5>
        <br>
        <a href="JoueurController.php?id=<?php echo $carte['id']?>&joueur=A" class="btn btn-primary">Play this card</a>
      </div>
    </div> 
  </div>
  <?php endforeach ?> 

</div>  
</div>
<div>
<h2>joueurB</h2>
<h6>Pts Vie : <?=$joueurDataB['ptsVie']; ?> </h6>
  <h6>Pts Mana : <?=$joueurDataB['ptsMana']; ?> </h6> 
<div class="d-flex flex-row">

   <?php foreach ($mainB as $carte) :?>
  <div class="p-2">  
    <div class="card" style="width: 10rem;height:20rem">
      <img class="card-img-top" src="<?php echo $carte['image']?>"alt="Card image cap"style="height:150px">
      <div class="card-body">
        <h5 class="mana" style= "font-size: 17px;">cout mana : <?=$carte['mana']; ?></h5>
        <h5 class="ptsdommage"style= "font-size: 17px;">point degat :<?= $carte['degat'] ?></h5>
        <br>
        <a href="JoueurController.php?id=<?php echo $carte['id']?>&joueur=B" class="btn btn-primary">Play this card</a>
      </div>
    </div> 
  </div>
  <?php endforeach ?>

  </div>
</div>  
</div> 
<!-- <div class="piocher"> <a href="JoueurController.php?action=submit" class="btn btn-primary" name="submit" > Piocher </a> </div> -->
</body>
</html>