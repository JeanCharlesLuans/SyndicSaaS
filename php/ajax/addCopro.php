<?php
/* Dossiers ajoutCopro */
$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

$sql = 'INSERT INTO copropriete (NOM, ADRESSE, VILLE,CODE_POSTAL) VALUES (?,?,?,?,?)';
$pdo->prepare($sql)->execute([$_GET['nom'], $_GET['adresse'], $_GET['ville'], $_GET['codePostal']]);
?>
