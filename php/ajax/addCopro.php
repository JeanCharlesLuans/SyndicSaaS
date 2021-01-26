<?php
$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

$sql = 'INSERT INTO copropriete VALUES ('.$_GET['id'].', '.$_GET['nom'].', '.$_GET['adresse'].', '.$_GET['ville'].', '.$_GET['codePostal'].',)';
$reqPrep = $pdo->prepare($sql);
$reqPrep->execute();
?>
