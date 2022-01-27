<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO comptes (pseudo, mail, mdp) VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['mdp'], $_POST['mail']));


header('Location: login.php');

?>

