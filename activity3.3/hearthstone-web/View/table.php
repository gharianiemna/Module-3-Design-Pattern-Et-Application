<?php include_once('../Controller/JoueurController.php')?>
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
<div> 
<div>
<h2>joueurA</h2>
<h6  style="color:white">Pts Vie : <?php echo $_SESSION ['joueurDataA']['ptsVie'] ?> </h6>
  <h6  style="color:white">Pts Mana : <?php echo $_SESSION ['joueurDataA']['ptsMana'] ?> </h6>
  
 <div class="d-flex flex-row">
  <?php foreach ($mainA as $key=>$value ) :?>
   <div class="p-2">  
     <div class="card" style="width: 10rem;height:20rem">
       <img class="card-img-top" src="<?php echo $value['image']?>" alt="Card image cap"style="height:150px">
       <div class="card-body">
         <h5 class="mana" style= "font-size: 17px;">cout mana : <?=$value['mana']; ?></h5>
         <h5 class="ptsdommage"style= "font-size: 17px;">point degat :<?= $value['degat'] ?></h5>
         <br>
       </div>
       <form method="Post">
            <input type="hidden" name="id_A" value = "<?php echo $key?>" >
            <input type="hidden" class="form-check-input" id="exampleCheck1"  name='url' value= "user" >
           <button type="submit" name = "playA" class="btn btn-primary">Play this card</button>
       </form>
      </div>
   </div>
   <?php endforeach ?>
   </div>  
</div>  
<div >
 
 <form action="JoueurController.php" method="post">
 <input type="hidden" class="form-check-input" id="exampleCheck1"  name='url' value= "user" >
 <input type="submit" name="piocherA" class="btn btn-warning" value="Piocher une carte" />
  </form><br>
</div>
</div>
   
<div>
<div>
<h2>joueurB</h2>
<h6  style="color:white">Pts Vie : <?php echo $_SESSION ['joueurDataB']['ptsVie'] ?> </h6>
  <h6  style="color:white">Pts Mana : <?php echo  $_SESSION ['joueurDataB']['ptsMana'] ?> </h6>

   <div class="d-flex flex-row">

    <?php foreach ($mainB as $key=>$value) :?>
      <div class="p-2">  
           <div class="card" style="width: 10rem;height:20rem">
           <img class="card-img-top" src="<?php echo $value['image']?>"alt="Card image cap"style="height:150px">
        <div class="card-body">
               <h5 class="mana" style= "font-size: 17px;">cout mana : <?=$value['mana']; ?></h5>
               <h5 class="ptsdommage"style= "font-size: 17px;">point degat :<?= $value['degat'] ?></h5>
           <br> 
         </div>
         <form method="Post">
           <input type="hidden" name="id_B" value = "<?php echo $key?>" >
           <input type="hidden" class="form-check-input" id="exampleCheck1"  name='url' value= "user" >
            <button type="submit" name = "playB" class="btn btn-primary">Play this card</button>
          </form>
        </div> 
     </div>
   <?php endforeach ?> 
   </div>  
  </div>
  <div >
 
 <form action="JoueurController.php" method="post">
 <input type="hidden" class="form-check-input" id="exampleCheck1"  name='url' value= "user" >
 <input type="submit" class="btn btn-warning" name="piocherB" value="Piocher une carte" />
  </form><br>
  </div>  
  </div>  
</body>
</html>