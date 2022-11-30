<html>
    <head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
    <body>
   

<?php

session_start(); 
include 'conf.php';


//récupération variable
$email=$_POST["email"];
$motdepasse=$_POST["motdepasse"];

//on se connecte à la BDD
$bdd = new pdo('mysql:host=localhost;dbname=BLOC3_TD8', 'root', '');

//on prépare la requête
$stmt = $bdd->prepare('SELECT * from acheteur where email=? AND motdepasse=?');
//on l'éxecute avec les 2 paramètres ?
$stmt->execute([$email,$motdepasse]);
//on met la ligne de résultat dans $ligne
$ligne=$stmt->fetch();

//si j'ai bien une ligne = on vérifie que la colonne id est null
if (isset($ligne["id"]))
{
    echo "Connexion OK";
    $id=$ligne["id"];

    //on prépare la requête
    $stmt = $bdd->prepare('SELECT * from voir where idAcheteur= :id');
    //on l'éxecute avec le paramètres
    $stmt->execute(["id"=>$id]);

    echo "<br>Voici vos notes:";
    //tant que j'ai des lignes je stock ma ligne courante dans $ligne
    while($ligne = $stmt->fetch())
    {

        echo "<br>$ligne[note]";

    }
}
else
{
    echo "Echec connexion";
}












/*

if (isset($_POST['envoi'])) //reçois données rentrée lors de la connexion
{
    $pdo=new pdo('mysql:host=localhost;dbname=BLOC3_TD8','root','');
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    $motdepasse= md5($motdepasse); //crypter le mot de passe
    $connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD);
    $stmt = $pdo->query("Select * from acheteur WHERE email='$email' AND motdepasse='$motdepasse' "); //recupere données utilisateur 
    $stmt->execute([$email,$motdepasse]);
    while ($row = $stmt->fetch()){echo $row['name']."<br />\n";}

     //echo "<br> ma req SQL : $requete <br>";
    /*$resultat = mysqli_query($connexion, $requete);
    $trouve=0;
}
*/

?>

</body>
</html>
