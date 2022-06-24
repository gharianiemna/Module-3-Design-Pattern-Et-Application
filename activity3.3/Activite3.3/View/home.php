<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/style.css">
    <title>Document</title>
</head>
<body>
    

<?php foreach($cartes as $cart):?>

    <div class="card" style="width: 18rem;">
  <img src="<?php echo $cart['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card </h5>

    <a href="#" class="btn btn-primary"> Mana: <?php echo $cart['mana'] ?></a>     <a href="#" class="btn btn-primary"> Dégat:<?php echo $cart['degat'] ?></a>
  </div>
</div>

    


<?php endforeach ?>
</body>
</html>