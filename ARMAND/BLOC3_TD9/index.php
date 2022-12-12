<html>
    <head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
    <body>

<?php
session_start();

      if (isset($_POST['deco']))
            {
              session_destroy();
              //détruit la session après clique sur bouton deconnexion
              //echo "deconnectée";
            } 
?>
<form method="POST" action="connexion.php">
    login:<input type="text" name="email"><br>
    mot de passe:<input type="password" name="motdepasse"><br>
    <input type="submit" name="envoi" value="OK">
</form>

</html>
