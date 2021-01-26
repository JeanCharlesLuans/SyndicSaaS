<?php
    $pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

    echo '<br/>id : '.$_GET['id'];

    $sql = "DELETE FROM copropriete WHERE ID=?";
    $pdo->prepare($sql)->execute([$_GET['id']]);
?>