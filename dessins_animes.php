<!doctype html>
	<html>
		<head>
			<meta charset="UTF-8">
			<link rel='stylesheet' type="text/css" href="maincss">
		</head>

<body>

<div class="menu-vertical">
	<div class="avatar"></div>
	<h3>Catégories</h3>
	<div class="menu"><a href='main.php'>Acceuil</a></div>
	<div class="menu"><a href='films.php'>Films</a></div>
	<div class="menu"><a href='series.php'>Séries</a></div>
	<div class="menu"><a href='animes.php'>Animés</a></div>
	<div class="menu"><a href='documentaires.php'>Documentaires</a></div>
	<div class="menu"><a href='reportages.php'>Reportages</a></div>
	<div class="menu"><a href='dessins_animes.php'>Vous êtes dans Dessins animés</a></div>
	<div class="menu"><a href='autres.php'>Autres</a></div>
</div>

<div class="bienvenue">
<h1>Bienvenue dans la catégorie Dessins Animés</h1>
<p>Retrouvez vos dessins animés ci-dessous</p>
<br>
<br>
<br>
<p>Dessins Animés : </p>
<a target="_blank">
  <img src="Dessins_Foot.jpg" alt="Spiderman" style="width:150px" text-align="left" >
  <p>Foot 2 rue
2005 ‧ 3 saisons</p>
<br>
<a target="_blank">
  <img src="Dessins_Pokemon.jpg" alt="Spiderman" style="width:150px" >
  <p>Pokémon
1997 ‧ Aventure ‧ 2001 épisodes</p>
<br>
<a target="test">
  <img src="Dessins_Ratz.jpg" alt="Spiderman" style="width:150px" >
  <p>Ratz
2003 ‧ Animation ‧ 1 saison</p>
</div>


<body background="background.jpg">

<div class="minichat">
<form action="minichat_post_dessins_animes.php" method="post">
<p>
<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"
/><br />

<label for="message">Message</label> : <input type="text" name="message"
id="message" /><br />

<input type="submit" value="Envoyer" />
</p>
</form>

</body>

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

//Session définit pour controleur php dynamique

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat WHERE categories = "7" ORDER BY ID DESC
LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{

echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' .
htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>

</div>