<?php

$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

$reqPrep = $pdo->prepare("DELETE FROM utilisateur WHERE ID="+ $_GET['id']);
$reqPrep->execute();
?>