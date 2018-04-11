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
 /*   
echo 'Le message a bien été envoyé !' . '<br>';
echo 'Nom: ' . $lastName . '<br>';
echo 'Prenom: ' . $firstName . '<br>';
echo 'Téléphone: ' . $telephone . '<br>';
echo 'Adresse: ' . $adresse . '<br>';
echo 'Email: ' . $courriel . '<br>';
echo 'commentaire: ' . $commentaire . '<br>';

$reponse = $bdd->query('SELECT * FROM formulaire');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Historique</strong> :<br />
    Cette personne : <?php echo $donnees['lastName']; ?>,  <?php echo $donnees['firstName']; ?> <br />
    numero: <?php echo $donnees['telephone']; ?> <br/> Adresse: <?php echo $donnees['adresse']; ?> <br/> Couriel : <?php echo $donnees['courriel']; ?>  <br />
    a laissé ce message: <?php echo $donnees['commentaire']; ?></em>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
*/
header('Location: reservation.html');
?>

</body>
</html>