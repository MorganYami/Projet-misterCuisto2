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
$firstName = $_POST['firstName']; 
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$courriel = $_POST['courriel'];
$commentaire = $_POST['commentaire'];

$req = $bdd->prepare('INSERT INTO formulaire (lastName, firstName, telephone, adresse, courriel, commentaire) VALUES(:lastName, :firstName, :telephone, :adresse, :courriel, :commentaire)');
$req->execute(array(
    
    'lastName' => $lastName,
	'firstName' => $firstName,
	'telephone' => $telephonee,
	'adresse' => $adresse,
	'courriel' => $courriel,
	'commentaire' => $commentaire
    ));

header('Location: reservation.html');
?>

</body>
</html>