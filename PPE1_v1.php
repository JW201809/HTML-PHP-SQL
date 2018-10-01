<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ppe1;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req= $bdd->prepare('INSERT INTO formulaire_intervention (nom, prenom, email, typeintervention) VALUES (?, ?, ?, ?)');

$req -> execute (array($_POST['nom'],$_POST['prenom'], $_POST['email'], $_POST['typeintervention']  ));

echo 'Nous avons bien reçu votre demande. nous reviendrons vers vous dans les meilleurs délais!'; 

?>