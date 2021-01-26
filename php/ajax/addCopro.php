<?php
$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

echo '<br/>nom : '.$_GET['nom'];
echo '<br/>adresse : '.$_GET['adresse'];
echo '<br/>ville : '.$_GET['ville'];
echo '<br/>codePostal'.$_GET['codePostal'];


$sql = 'INSERT INTO copropriete (ID, NOM, ADRESSE, VILLE,CODE_POSTAL) VALUES (?,?,?,?,?)';
$pdo->prepare($sql)->execute([$_GET['id'],$_GET['nom'], $_GET['adresse'], $_GET['ville'], $_GET['codePostal']]);
?>