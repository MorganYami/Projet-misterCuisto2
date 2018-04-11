<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>

<?PHP

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', 'pangot');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage('Impossible de se connecter à la base de données'));
};

$lastName = $_POST['lastName'];
$courriel = $_POST['courriel'];
$commentaire = $_POST['commentaire'];

$req = $bdd->prepare('INSERT INTO livreOr (lastName, courriel, commentaire) VALUES(:lastName, :courriel, :commentaire)');
$req->execute(array(
    
    'lastName' => $lastName,
	'courriel' => $courriel,
	'commentaire' => $commentaire
	));
	


// Redirection du visiteur vers la page du livre d'or
header('Location: livredor.html');

?>

</body>
</html>