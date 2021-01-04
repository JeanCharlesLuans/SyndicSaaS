<?php    
    require 'connectionBD.php';
    
    function rechercheUser($pseudo, $mdp) {
        $pseudoV = $pdo->quote($pseudo);  // empêche l'injection de SQL
        $pseudo = $pdo->quote($mdp);      // empêche l'injection de SQL

        $sql = 'SELECT PSEUDO, MDP, STATUT FROM utilisateur WHERE PSEUDO = '.$pseudoV;  
        $prepare = $pdo->prepare($sql);   
        $res = $prepare ->exec($sql);     
        $nb = $prepare ->rowCount();

        if (nb == 0) {
            echo '<p class="red"> Aucun utilisateur n\'as était trouvée </p>';
        } else {
            $req = $pdo->query($sql);    
            6. while($row = $req->fetch()) {    
            7.     echo '<a href="membre-'.$row['id'].'.html">'.$row['pseudo'].'</a><br/>';    
            8. }    
            9. $req->closeCursor();    
        }
    }
?>