<html>
<head>
<title>header</title>
<link rel="stylesheet" href="../views/style.css">
</head>
<body>
<?php 
include 'header.php';
?>
<h1> Leçon 3.2 : Les Design Patterns </h1>
<div class="images">
<img  src="https://media.glassdoor.com/sqll/485967/talan-squarelogo-1452188470682.png" alt="W3Schools.com">
</div>


<div class="article"> 
<h2>Les acticles sont :</h2>

<?php foreach($artis as $art):?>


<div class="card border-success mb-3" style="max-width: 80rem; align-self:center">
  <div class="card-header bg-transparent border-success"> <h6> Le <?php echo  $art['date_publication'] ?></h6></div>
  <div class="card-body ">
    <h5 class="card-title text-success"><?php echo $art['titre'] ?></h5>
    <p class="card-text text-dark"><?php echo $art['texte'] ?></p>
  </div>
  <div class="card-footer bg-transparent border-success"><?php echo $art['auteur'] ?></div>
</div>
    


<?php endforeach ?>

<div class="article">
<h2>Ajoutez un nouvel article</h2>


<form method="post" action="index.php">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="texte" name ='titre' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Text</label>
    <input type="texte" name ='text' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">pseudo</label>
    <input type="texte" name ='auteur' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" name ='date_publication' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:50%;">

  </div>

   <button type="submit" class="btn btn-primary"  name="btn" >Submit</button>
</form>
</div>

</div>
</body>
 
        <?php
    include 'footer.php';
    ?>
</html>
