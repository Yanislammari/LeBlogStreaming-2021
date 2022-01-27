<!doctype html>
	<html>
		<head>
			<meta charset="UTF-8">
			<link rel='stylesheet' type="text/css" href="maincss">
		</head>

<div class="menu-vertical">
	<div class="avatar"></div>
	<h3>Catégories</h3>
	<div class="menu"><a href='main.php'>Vous êtes dans Acceuil</a></div>
	<div class="menu"><a href='films.php'>Films</a></div>
	<div class="menu"><a href='series.php'>Séries</a></div>
	<div class="menu"><a href='animes.php'>Animés</a></div>
	<div class="menu"><a href='documentaires.php'>Documentaires</a></div>
	<div class="menu"><a href='reportages.php'>Reportages</a></div>
	<div class="menu"><a href='dessins_animes.php'>Dessins animés</a></div>
	<div class="menu"><a href='autres.php'>Autres</a></div>
</div>

<div class="bienvenue">
<h1>Bienvenue dans LeBlogStreaming</h1>
<p>Vous retrouverez ici tout type de divertissements.</p>
	<h2> Au programme : </h2>
		<br>
		<br>
		<br>
	<p> Films, Series, Animés, Documentaires, Reportages ainsi que Déssins animés !</p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h3> Bonne navigation et bon visionage !</h3>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p> Il y'a également dans chacunes de ces catégories un minichat pour que vous puissez discuter entre vous !</p>
</div>

<body background="background.jpg">



<div class="minichat">
<form action="minichat_post.php" method="post">
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
$reponse = $bdd->query('SELECT pseudo, message FROM minichat WHERE categories = "1" ORDER BY ID DESC
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