 <html>
    <head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
    <body>
   

<?php

session_start(); 
include 'conf.php';

if (isset($_POST['envoi'])) //reçois données rentrée lors de la connexion
{
   
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $mdp= md5($mdp); //crypter le mot de passe
    $connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD);
    $requete="Select * from UTILISATEUR WHERE login = '$login' AND motdepasse= '$mdp'"; //recupere données utilisateur 
    //echo "<br> ma req SQL : $requete <br>";
    $resultat = mysqli_query($connexion, $requete);
    $trouve=0;
    while($donnees = mysqli_fetch_assoc($resultat))
      {
   
        $trouve=1;
        $type=$donnees['type'];
        $login=$donnees['login'];
        $nom=$donnees['nom'];
        $prenom=$donnees['prenom'];
        $id=$donnees['num'];
     // echo "je créé mes sessions !!!";
        $_SESSION["id"]=$id; //relie variable avec session
        $_SESSION["login"]=$login;
        $_SESSION["nom"]=$nom;
        $_SESSION["prenom"]=$prenom;
        $_SESSION["type"]=$type;
    
      }

    if($trouve==0)
    {
        echo "erreur de connexion";
        echo "<FORM method='post' action='index.php'> <button type=submit name='deco'> Revenir a la page de connextion </button> </form>";
    }
}
if (isset($_SESSION["login"]))
 
    {
        if($_SESSION["type"]==0)
        {
          ?>
         <ul class="nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="perso.php">Profil</a></li>
        <li><a href="cr.php">Compte rendus</a></li>
        <li><a href="nouveauCR.php">Nouveau compte-rendu</a></li>
        </ul>
 
            <?php
            echo "bienvenue sur le compte élève <br> <br>";
            echo "Vous êtes connecté en tant que ".$_SESSION["nom"]. $_SESSION["prenom"]."<br> <br>";
           echo "<FORM method='post' action='index.php'> <button type=submit name='deco'> DECONNEXION </button> </form>";
        }
        else
        {
?>
              <ul class="nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="perso.php">Profil</a></li>
        <li><a href="cr.php">Compte rendus</a></li>
        </ul> </html
<?php
            echo "vous êtes un prof<br>";
             echo "Vous êtes connecté en tant que ".$_SESSION["nom"]. $_SESSION["prenom"]."<br> <br>";
            echo "<FORM method='post' action='index.php'> <button type=submit name='deco'> DECONNEXION </button> </form>";
        }
    }

    





?>
</html>


   

