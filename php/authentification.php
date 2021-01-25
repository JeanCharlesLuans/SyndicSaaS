<?php    
       
    
    function rechercheUser($mail, $mdp) {
        // Création de la connection
        $pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');

        // Préparation de la requetes
        $reqPrep = $pdo->prepare("SELECT id FROM utilisateur WHERE mail = :mail AND mot_de_passe = :motDePasse");
        $reqPrep->execute(array ('mail' => $mail, 'motDePasse' => $mdp));
        $res = $reqPrep->fetch();

        if (count($res) != '2') {
            header('Location: ../index.php?error=true');
        } else {      
            // Création d'une session
            session_start();
            $_SESSION['login'] = $mail;
            $_SESSION['id'] = $res['id'];
            $_SESSION['admin'] = false;

            $reqPrep = $pdo->prepare("SELECT Count(*) FROM administrateur WHERE id_utilisateur = :idUser");
            $reqPrep->execute(array ('idUser' => $_SESSION['id']));
            $res = $reqPrep->fetch();

            // Si il existe un resultat alors l'user est admin
            $_SESSION['admin'] = $res[0] == '1';

            if ($_SESSION['admin'])
                header('Location: ../page/contenuAdmin.php');
            else
                header('Location: ../page/contenuProprietaire.php');
        }
    }

    if ( isset( $_POST['connecter'] ) ) {
        /* récupérer les données du formulaire en utilisant 
           la valeur des attributs name comme clé 
          */
        $identifiant = $_POST['inputIdentifiant']; 
        $motDePasse = $_POST['inputMDP']; 
        rechercheUser($identifiant, $motDePasse);
    } else {
        echo "Error 404";
    }
?>