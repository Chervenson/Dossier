<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title><?= $title ?></title>
      <link href="style.css" rel="stylesheet" /> 
   </head>

   <body>
 
<form method="post">
    <h4>Connectez vous pour ajouter un commentaire</h4>
    <div>
        <label for="login">Login :</label>
        <input type="text" id="login" name="login">
    </div>
    <div>
        <label for="pwd">mdp:</label>
        <input type="password" id="pwd" name="pwd">
    </div>
     <div>
  	     <input type="submit" />
     </div>
</form>
<?
if(!isset($_POST['login']) || empty($_POST['pwd'])){
 
    echo 'erreur';
 
}
?>


      <?= $content ?>
   </body>
</html>
