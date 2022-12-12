<?php
$bdd="NOMDEVOTREBDD";
//si on a cliqué sur le bouton inscription
if (isset($_POST["btn_inscription"])) 
{
	$nom = $_POST['nom']; 
	$prenom = $_POST['prenom']; 
	$adresse = $_POST['adresse']; 
	$ville = $_POST['ville']; 
	$CP = $_POST['CP']; 
	$tel = $_POST['tel']; 
	$login = $_POST['login']; 
	$mdp = $_POST['pwd']; 
	$categorie = $_POST['categorie']; 
	
	// on se connecte à MySQL 
	if($connexion = mysqli_connect('localhost', 'root', '', $bdd))
	{
		// Si la connexion a réussi on va insérer les clients dans la BDD
		$requete="????";
		
		//on exécute la requête
		if (!mysqli_query($connexion,$requete)) 
		{
			  echo "<br>Erreur de requête SQL : ".mysqli_error($connexion)."<br>";
		}
		echo "<b>Inscription réussie</b><hr>";
		
		//on oublie pas de fermer la connexion
		mysqli_close($connexion);

	}
	else // Mais si elle rate
	{
		echo 'Erreur'; // On affiche un message d'erreur
	}

}

?>




Veuillez renseigner les champs pour vous inscrire :
<FORM method="POST">
nom : <input name="nom"> <br>
prenom : <input name="prenom"><br>
adresse: <input name="adresse"><br>
CP : <input name="CP"><br>
ville : <input name="ville"><br>
tel : <input name="tel"><br>
Votre catégorie 
<?php
	// on se connecte à MySQL 
	if($connexion = mysqli_connect('localhost', 'root', '', $bdd))
	{
		// Si la connexion a réussi 
		echo "<select name='categorie'>";
		$requete="Select * from CATEGORIE";
		$resultat = mysqli_query($connexion, $requete);
		//on va remplir la liste des catégories
		while($donnees = mysqli_fetch_assoc($resultat))
		{
			echo "<option value='$donnees[num]'>$donnees[nom]</option>";

		}
		echo "</select>";
		//on oublie pas de fermer la connexion
		mysqli_close($connexion);

	}
	else // Mais si elle rate
	{
		echo 'Erreur de connexion BDD'; // On affiche un message d'erreur
	}

?>
<br>
login : <input name="login"><br>
mot de passe : <input name="pwd" type="password">
<br>
<input type="submit" value="INSCRIPTION" name="btn_inscription">
</FORM>
