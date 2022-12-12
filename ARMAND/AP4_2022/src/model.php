 <?php    // Connexion à la base de données
 function getPosts(){
      $bdd=dbConnect();

      // On récupère les 5 derniers billets
      $req = $bdd->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

		$posts = [];
		while (($row = $req->fetch())) {
			$post = [
				'id' => $row['id'],
				'title' => $row['title'],
				'french_creation_date' => $row['creation_date'],
				'content' => $row['content'],
			];

			$posts[] = $post;
		}
		return $posts;
 }	

function getPost($id) {
	$database = dbConnect();
	$statement = $database->prepare(
    	"SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date 
		FROM posts 
		WHERE id = ?"
	);
	$statement->execute([$id]);

	$row = $statement->fetch();
	$post = [
		
        'identifier' => $row['id'],
    	'title' => $row['title'],
    	'french_creation_date' => $row['french_creation_date'],
    	'content' => $row['content'],
	];

	return $post;
}

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=AP4_2022;charset=utf8', 'root', '');

        return $database;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}	

//Fonction qui affiche les commentaires
function getComments($identifier)
{
 
 	$database = dbConnect();
    $statement = $database->prepare(
        "SELECT comments.id, comment, author, DATE_FORMAT(comment_date, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date, USER.name  FROM comments,USER WHERE comments.author=USER.id AND post_id = ? ORDER BY comment_date DESC"
    );
    $statement->execute([$identifier]);
 
    $comments = [];
    while (($row = $statement->fetch())) {
        $comment = [
            'author' => $row['author'],
            'Nameauthor' => $row['name'],
            'french_creation_date' => $row['french_creation_date'],
            'comment' => $row['comment'],
        ];
        $comments[] = $comment;
    }

    return $comments;
}

//Fonction qui créer les commentaires
function createComment (string $post, int $author, string $comment)
{
	$database = dbConnect();
	$statement = $database->prepare(
    	'INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())'
	);
	$affectedLines = $statement->execute([$post, $author, $comment]);

    	$post = [
		'identifier' => $row['id'],
    		'title' => $row['title'],
    		'french_creation_date' => $row['french_creation_date'],
    		'content' => $row['content'],
	];

	return ($affectedLines > 0);
}

// Afficher les noms des auteurs des commentaires

function get_Auteur (string $post, string $author, string $comment)
{
	$database = dbConnect();
	$statement = $database->prepare(
    	'SELECT author FROM comments, USER WHERE comments.id=USER.nom '
	);
	$statement->execute([$nom]);

    	$author = [
		'identifier' => $row['nom'],
    		'title' => $row['title'],
    		'french_creation_date' => $row['french_creation_date'],
    		'content' => $row['content'],
	];

	return ($author);
}


//Se connecter pour mettre un commentaire
function Test_connexion (string $post, string $login, string $pwd)
{
	$database = dbConnect();
	$statement = $database->prepare(
    	'SELECT * FROM USER WHERE login=? and pwd=? '
	);
	$affectedLines = $statement->execute([$post, $login, $pwd]);

    	$post = [
            'id' => $row['id'],
            'name' => $row['name'],
            'firstname' => $row['firstname'],
            'email' => $row['email'],
		    'login' => $row['login'],
    		'pwd' => $row['pwd'],
    		
	];

	return ($user);
}




		?>
