<?php


// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());

}


$Categorie = "2";
$Name = "films";

// Insertion du message à l'aide d'une requête préparée
//$req = $bdd -> query('INSERT INTO minichat(categories, pseudo, message, nom_categorie) VALUES ("1","yaya","caca", "accueil")');
$req = $bdd->prepare('INSERT INTO minichat (categories, pseudo, message, nom_categorie) VALUES(?, ?, ?, ?)');
$req->execute(array($Categorie, $_POST['pseudo'], $_POST['message'], $Name));

// Redirection du visiteur vers la page du minichat
header('Location: films.php');
?>