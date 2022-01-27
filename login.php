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

<<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | By Code Info</title>
    <link rel="stylesheet" href="site_css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form method="post" action="control_connexion.php">
        <label>Utilisateur</label>
        <input type="text" name="pseudo"/>
        <label>Mot de passe</label>
        <input type="password" name="mdp"/>
        <input type="submit" value="Se connecter" />
      </form>
    </div>
    <p class="para-2">
      Pas de compte ? <a href="inscription.php">Cliquez ici</a>
    </p>
  </body>
</html>

<?php
    if (isset($_GET['erreur']))
    {
        echo "L'utilisateur ou le mot de passe est incorrect";
    }
    ?>
