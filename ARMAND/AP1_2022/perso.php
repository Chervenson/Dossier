<?php
session_start();
?>

<html>
<head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
<body> </html>
<?php
include 'conf.php';
if ($_SESSION["type"] ==1) //si connexion en prof
  {
    ?>
    <html>
    <ul class="nav">
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="perso.php">Profil</a></li>
    <li><a href="cr.php">Compte rendus</a></li>
    </ul> </html> <?php

//Afficher le profil du prof
       
  }
else
  {
    ?>
    <html>
    <ul class="nav">
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="perso.php">Profil</a></li>
    <li><a href="cr.php">Compte rendus</a></li>
    <li><a href="ccr.php">Nouveau compte-rendu</a></li>
    </ul> </html> <?php
  }



  
?>

<?php

//Afficher le profil de l'eleve
if($connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD))
      {
        $id=$_SESSION["id"];     
        $requete="SELECT * FROM UTILISATEUR WHERE UTILISATEUR.num=$_SESSION[id]"; 
        
        $resultat = mysqli_query($connexion, $requete);
        while($donnees = mysqli_fetch_assoc($resultat))
        {
          $nom=$donnees['nom'];
          $prenom=$donnees['prenom'];
          $email=$donnees['email'];
          $tel=$donnees['tel'];

            echo " Votre nom: $nom <br>";
            echo " Votre prenom: $prenom <br>";
            echo " Votre email: $email <br>";
            echo " Votre numéro de telephone: $tel <br>";
        }
            
           
            
           
          }
    

?>
