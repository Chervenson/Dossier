<?php

$Nom  = $_POST["Nom"]; 
$Prenom  = $_POST["Prenom"];
$email  = $_POST["email"];
$Login = $_POST["Login"];
$password = $_POST["password"];
$dateNaissance = $_POST ["dateNaissance"];
$Sexe  = $_POST["Sexe"];
$Anne_BAC  = $_POST["Anne_BAC"];
/*$Repeter = $_POST["Repeter"];*/



if(empty($Nom ) || empty($Prenom) || empty($email ) || empty($Login ) || empty($password) || empty($dateNaissance) || empty($Sexe) || empty($Anne_BAC) )
{

    echo "veuillez remplir tous les champs";
 
}
else

{
       echo "bonjour $Nom $Prenom $email $Login $password $dateNaissance $Sexe $Anne_BAC";
        if($_POST['password'] == $_POST['Repeter'])
        {
   
            
     echo "rive ";

        }

        else
        {
            echo 'Veuiller rentrer deux mots de passes identiques';
        }


}


include "_conf.php";
	if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
	{
	$mdp= md5("password");
	$requete = "Insert into ADHERENT values (NULL,'$Nom ','$Prenom', '$email','$Login' , '$password' ,'$dateNaissance' ,'$Sexe' , '$Anne_BAC');"; 
	$resultat= mysqli_query($bdd,$requete);
    echo "<hr>$requete<hr>";
    echo "Inscription réusis!!!! ";
	}
    
	

	else
		{
				$test="Erreur : tout les champs ne sont pas renseigner. ";
		}
			
































?>
