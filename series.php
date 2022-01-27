<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="maincss" />

    <title>Document</title>
  </head>
  <body background="background.jpg">
    <div class="contenu">
      <slide>
        <div class="menu-vertical">
          <h2>Catégories</h2>
          <div class="menu"><a href="main.php">Acceuil</a></div>
          <div class="menu"><a href="films.php">Films</a></div>
          <div class="menu"><a href="series.php">Vous êtes dans Séries</a></div>
          <div class="menu"><a href="animes.php">Animés</a></div>
          <div class="menu"><a href="documentaires.php">Documentaires</a></div>
          <div class="menu"><a href="reportages.php">Reportages</a></div>
          <div class="menu">
            <a href="dessins_animes.php">Dessins animés</a>
          </div>
          <div class="menu"><a href="autres.php">Autres</a></div>
        </div>
      </slide>

      <span class="droite">
        <div class="haut">
          <div class="bienvenue">
            <h1>Bienvenue dans la catégorie Animés</h1>
            <p>
              Retrouvez vos meilleurs animés légendaires
              <strong>venu de ADN</strong>
            </p>
          </div>
		  
<div class="minichat">
<form action="minichat_post_series.php" method="post">
<p>
<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"
/><br />

<label for="message">Message</label> : <input type="text" name="message"
id="message" /><br />

<input type="submit" value="Envoyer" />
</p>
</form>
	  
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
$reponse = $bdd->query('SELECT pseudo, message FROM minichat WHERE categories = "3" ORDER BY ID DESC
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
			
        </div>
        <h3>Animés :</h3>
        <div class="encadrer-un-contenu">
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
          <div class="image-text">
            <a
              target="_blank"
              href="https://www.youtube.com/watch?v=ssiDPoqClxQ"
            >
              <img
                src="Series_casaPapel.png"
                alt="Spiderman"
                style="width: 150px"
                text-align="left"
              />
            </a>
            <a href="#">text</a>
          </div>
        </div>
      </span> 
    </div>
  </body>
  
</html>

