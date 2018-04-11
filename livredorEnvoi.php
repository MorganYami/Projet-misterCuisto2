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
	
/*
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT lastName, message FROM livre_or ORDER BY ID DESC LIMIT 0, 10');
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['lastName']) . '</strong> : ' . htmlspecialchars($donnees['commentaire']) . '</p>';
}

$reponse->closeCursor();

  
echo 'Le message a bien été envoyé !' . '<br>';
echo 'Nom: ' . $lastName . '<br>';
echo 'Email: ' . $courriel . '<br>';
echo 'commentaire: ' . $commentaire . '<br>';

$reponse = $bdd->query('SELECT * FROM livreOr');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Historique</strong> :<br />
    Cette personne : <?php echo $donnees['lastName']; ?><br />
    Couriel : <?php echo $donnees['courriel']; ?>  <br />
    a laissé ce message: <?php echo $donnees['commentaire']; ?></em>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
*/


// Redirection du visiteur vers la page du livre d'or
header('Location: livredor.html');

?>

</body>
</html>