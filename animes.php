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
	<div class="menu"><a href='films.php'>Films</a></div>
	<div class="menu"><a href='series.php'>Séries</a></div>
	<div class="menu"><a href='animes.php'>Vous êtes dans Animés</a></div>
	<div class="menu"><a href='documentaires.php'>Documentaires</a></div>
	<div class="menu"><a href='reportages.php'>Reportages</a></div>
	<div class="menu"><a href='dessins_animes.php'>Dessins animés</a></div>
	<div class="menu"><a href='autres.php'>Autres</a></div>
</div>

<body background="background.jpg">


<div class="bienvenue">
<h1>Bienvenue dans la catégorie Animés</h1>
<p>Retrouvez les meilleurs animés <strong>disponibles des maintenant !</strong></p>
<br>
<br>
<br>
<p>Animés : </p>
<a target="_blank">
  <img src="Anime_OP.jpg" alt="Spiderman" style="width:150px" text-align="left" >
<p> One Piece
1999 ‧ Aventure ‧ 20 saisons
</p>
<br>
<a target="_blank">
  <img src="Anime_Naruto.jpg" alt="Spiderman" style="width:150px" >
  <p> Naruto Shippûden
2007 ‧ Action ‧ 21 saisons
</p>
<br>
<a target="test">
  <img src="Anime_DBZ.jpg" alt="Spiderman" style="width:150px" >
  <p> Dragon Ball Z
1989 ‧ Action ‧ 9 saisons
</p>
</div>

<div class="minichat">
<form action="minichat_post_animes.php" method="post">
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
$reponse = $bdd->query('SELECT pseudo, message FROM minichat WHERE categories = "4" ORDER BY ID DESC
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