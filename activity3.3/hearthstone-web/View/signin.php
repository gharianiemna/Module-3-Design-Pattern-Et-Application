<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="../View/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body  class="signin" style="background-image: url(https://th.bing.com/th/id/R.e2952ebca5cace297a0dd63af3caab0e?rik=DQf5PZwZC3tp8w&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2ff%2fb%2fc%2f872709-widescreen-hearthstone-wallpapers-2560x1440-for-windows-7.jpg&ehk=vWYw4mXpg%2fZEBntA3HFw7nmA54bnKF4J5a%2b43hgd%2bMw%3d&risl=&pid=ImgRaw&r=0) ; display:flex; flex-direction:column; justify-content:center; align-items:center; margin:3rem ">
<div class="article" style="color:white; align-self:center">
<br style="margin:5rem">
<br style="margin:5rem">
<br style="margin:5rem">
<h2>Inscrivez-Vous!</h2>
<br style="margin:5rem">
<form class="form-control form-control-sm"  method="post" action="JoueurController.php"  style="width: 400px; background-color:#b8860b; display:flex; flex-direction:column; justify-content:center; align-items:center ">
<div class="mb-3 logins">
    <label for="exampleInputEmail1" class="form-label">Login</label>
    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="login" value=""  style="width: 150px; background-color: rgba(0,0,255,.1)">
   
  </div>
  <div class="mb-3 logins">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" value=""  style="width: 150px; background-color: rgba(0,0,255,.1)">
  
  </div>
  <div class="mb-3 logins">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password" value= "" style="width: 150px; background-color: rgba(0,0,255,.1)">
  </div>
  <div class="mb-3 form-check logins">
    <input type="hidden" class="form-check-input" id="exampleCheck1"  name='url' value= "user" >
  
  </div>

  <button type="submit" class="btn btn-danger logins" name='submitSignIn'>Submit</button>
</form>
</div>
</body>
</html>