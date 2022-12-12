<?php
include '_conf.php';

if ($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
{ 
    //Si la connexion a réussi
    echo "conexion BDD réussie !";


}

else // Mais si elle rate...

{

    echo "Oerreur"; // On affiche un message d'erreur.

}

?>



<html>
<head> 
            <title>  Page de connexion </title> 
<meta charset="utf8">
      </head> 

      <body>

           <h2>#Page de connexion</h2>

      <form method="post" action="acceuil.php">
      Login:<input name="Login"><br>
      Mot de passe:<input name="Motdepasse"><br>

      <input name="send_con" type="submit" value="Confirmer">
      </form>


<br>
<br>
       



     <a  href= "oubli.php"> Mot de passe oublieé </a>




      </body>




</html>
