<?php
$bdd="NOMDEVOTREBDD";
//si on a cliqué sur le bouton connexion
if (isset($_POST["btn_connexion"])) 
{
	$login = $_POST['login']; 
	$mdp = $_POST['pwd']; 

	
	// on se connecte à MySQL 
	if($connexion = mysqli_connect('localhost', 'root', '', $bdd))
	{
		// Si la connexion a réussi on va insérer les clients dans la BDD
		$requete="Select * from CLIENT where login='???' AND mdp='???'";
		if ($resultat = mysqli_query($connexion, $requete)) 
		{
			$resultat = mysqli_query($connexion, $requete);
			$nbligne= mysqli_num_rows ($resultat);
		
			/* CODE DE LA QUESTION 16
			}*/
		}
		else
		{
			
			echo "<br>Erreur SQL : ".mysqli_error($connexion)."<br>";
		}
		
		//on oublie pas de fermer la connexion
		mysqli_close($connexion);

	}
	else // Mais si elle rate
	{
		echo 'Erreur connexion BDD'; // On affiche un message d'erreur
	}

}
?>
<hr>
<a href="index.php">Revenir sur la page précédente</a href>

