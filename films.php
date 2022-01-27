<!doctype html>
	<html>
		<head>
			<meta charset="UTF-8">
			<link rel='stylesheet' type="text/css" href="maincss">
		</head>

<div class="menu-vertical">
	<div class="avatar"></div>
	<h3>Catégories</h3>
	<div class="menu"><a href='main.php'>Acceuil</a></div>
	<div class="menu"><a href='films.php'>Vous êtes dans Films</a></div>
	<div class="menu"><a href='series.php'>Séries</a></div>
	<div class="menu"><a href='animes.php'>Animés</a></div>
	<div class="menu"><a href='documentaires.php'>Documentaires</a></div>
	<div class="menu"><a href='reportages.php'>Reportages</a></div>
	<div class="menu"><a href='dessins_animes.php'>Dessins animés</a></div>
	<div class="menu"><a href='autres.php'>Autres</a></div>
</div>

<div class="bienvenue">
<h1>Bienvenue dans la catégorie Films</h1>
<p>Retrouvez vos filmes préféré ci-dessous avec leurs synopsis</p>
<br>
<br>
<br>
<p>Films : </p>
<a target="_blank">
  <img src="Films_Spiderman.PNG" alt="Spiderman" style="width:150px" text-align="left" >
<p> Spider-Man : No Way Home
Tous publics 2021 ‧ Action/Aventure ‧ 2h 28m
</p>
<br>
<a target="_blank">
  <img src="Films_HouseGucci.PNG" alt="Spiderman" style="width:150px" >
  <p>House of Gucci
Tous publics 2021 ‧ Crime/Drame ‧ 2h 37m
</p>
<br>
<a target="test">
  <img src="Films_Dune.PNG" alt="Spiderman" style="width:150px" >
  <p>Dune
Tous publics 2021 ‧ SF/Aventure ‧ 2h 35m
</p>
<br>
</div>

<body background="background.jpg">

<div class="minichat">
<form action="minichat_post_film.php" method="post">
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
$reponse = $bdd->query('SELECT pseudo, message FROM minichat WHERE categories = "2" ORDER BY ID DESC
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