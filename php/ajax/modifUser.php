<?php
$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

$sql = "UPDATE utilisateur SET NOM=".$_GET['nom'].", PRENOM=".$_GET['prenom'].", MDP=".$_GET['nom'].", ADRESSE=".$_GET['adresse'].", VILLE=".$_GET['ville'].", CODEPOSTAL=".$_GET['codePostal'].", TEL=".$_GET['tel'].", MAIL=".$_GET['mail']." WHERE ID=".$_GET['id'];

$reqPrep = $pdo->prepare($sql);
$reqPrep->execute();
?>

