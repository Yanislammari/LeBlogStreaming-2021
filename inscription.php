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

?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <title>Yanis STREAMING</title>
    <link rel="stylesheet" href="site_css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="signup-box">
      <h1>Inscrivez-vous !</h1>
      <h4>Site Streaming</h4>
      <form method="post" action="control_inscription.php">
        <label>Nom d'utilisateur</label>
        <input type="text" name="pseudo"/>
        <label>Addresse mail</label>
        <input type="email" name="mail" placeholder="yanislammari@gmail.com" required/>
        <label>Mot de passe</label>
        <input type="password" name="mdp" />
        <input type="submit" value="Envoyer" />
      </form>
      <p>
        Nous vous souhaitons la bienvenue sur la page d'inscription de Yanis STREAMING <br />
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </body>
</html>
