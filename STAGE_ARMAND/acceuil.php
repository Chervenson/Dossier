<html>
     <head> 
      
     <meta charset="utf8">
     </head>

   <body>



<?php 
if (isset($_POST['send_con']))
{
 $Login=$_POST['Login'];
     echo "le formulaire a été envoyé avec comme email la valeur :".$Login;

 $Motdepasse=$_POST['Motdepasse'];
     echo "le formulaire a été envoyé avec comme email la valeur :".$Motdepasse;

 
$requete="select * from UTILISATEUR where Login='$Login' AND Motdepasse='$Motdepasse'";
include '_conf.php';
$bdd=mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD);
$resultat = mysqli_query($bdd, $requete);
$trouve=0;
while ($donnees = mysqli_fetch_assoc($resultat))

{
       $trouve=1;
       $id=$donnees['num'];
       $type=$donnees['type'];
       $login=$donnees['login'];


}

if($trouve==1)
{
    echo "Bienvenue sur la page d'accueil. ";
}

else
{
  echo "Erreur de connexion";
}





 
if (isset($_SESSION['Sid']))
{
  echo "Vous etes bien connecter";
}
else
{
	echo "La connexion est perdue, veuillez revenir à la <a href='index.php'>page d'index</a> pour vous reconnecter."; 
}
















}
?>




   </body>

</html>
