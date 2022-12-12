<html>
<head> 
            <title> Retrouver Mot de passe </title> 
<meta charset="utf8">
      </head> 

      <body>

<?php 
if (isset($_POST['email']))
{
     $lemail=$_POST['email'];
     echo "le formulaire a été envoyé avec comme email la valeur :".$lemail;


include '_conf.php';
$connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD);


    //7. requête SQL
$requete="Select * from UTILISATEUR WHERE email='$lemail'";
$resultat = mysqli_query($connexion, $requete);
$etat=0;
	while($donnees = mysqli_fetch_assoc($resultat))
	{
        // GENERER UN MOT DE PASS
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $mdp = substr($shfl,0,8);
        echo $mdp;
         $etat=1;

       // $mdp = md5($mdp);
       
       

		$login =$donnees['login']; 
		//$mdp =$donnees['motdepasse'];
	    //$etat=1;

        

	}


    //8

     if($etat==0)
         {
             echo "Ereur l'adresse l'adresse email appartient a aucun utilisateur";
         }

     else
        {
           echo  "L'adresse email est bien presente la base de donner";


           //vous pouvez envoyer l'email grâce à la fonction mail avec son login+ mot de passe
             
              $texte="Bonjour, voici votre mot de passe = $mdp";
$mdp=md5($mdp);
                //echo $texte;
               mail($lemail, 'sioreport : mot de passe oublié', $texte);
            $requete="UPDATE `UTILISATEUR` SET `motdepasse` = $mdp WHERE `UTILISATEUR`.`login` = $login; ";
            $resultat = mysqli_query($connexion, $requete);

            //

         }



}
else
{
?>
           <h2>Retrouver Mot de passe </h2>

      <form method="post" action="oubli.php">
      Saisir @ email:<input name="email"><br>


      <input name="bouton" type="submit" value="Confirmer">
      </form>
<?php
}
?>










      </body>




</html>
