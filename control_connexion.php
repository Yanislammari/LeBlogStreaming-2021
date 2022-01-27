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


$pseudo = $_POST['pseudo'];
$password = $_POST['mdp'];


    $execution = $bdd ->query("SELECT * FROM comptes WHERE pseudo ='".$pseudo."'");  
    $exec = $execution ->fetch();

    if($pseudo = $exec['pseudo'] && $password = $exec['mdp'])
    {
        header('Location: main.php');
    }
    
    else
    {
   
        header('location:login.php?erreur=existe');
	}

?>