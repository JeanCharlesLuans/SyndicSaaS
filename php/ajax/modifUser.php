<?php
$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

$sql = "UPDATE utilisateur SET nom=".$_GET['nom']." prenom=".$_GET['prenom']." mdp=".$_GET['nom']." adresse=".$_GET['adresse']." ville=".$_GET['ville']." codePostal=".$_GET['codePostal']." tel=".$_GET['tel']." mail=".$_GET['mail']." WHERE ID=".$_GET['id'];

$reqPrep = $pdo->prepare($sql);
$reqPrep->execute();
?>

