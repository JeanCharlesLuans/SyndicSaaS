<?php
	$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');
?>

<html>
    <head>
		<title> SyndicSaaS Administration </title>
		<link href="../bootstrap/CSS/bootstrap.css" rel="stylesheet">
		<link href="../fontawesome/css/all.css" rel="stylesheet">
		<link href="../css/contenuAdmin.css" rel="stylesheet">
	</head>
	<body class="background">
		<header class="headerPcTab d-none d-sm-block">
				<img src='../img/logo_sans_fond.png' class="imgPcTab">
				<p id="iconeCopro" class="navAdmin copro"><i class="fas fa-house-user"></i> Copropriété </p>
				<p id="iconeUser" class="navAdmin user"><i class="fas fa-users"></i> Utilisateur </p>
				<a class="deconnexion" href="../index.php"> <i class="fas fa-power-off"></i> </a>
		</header>
		<header class="headerMobil d-block d-sm-none">
				<img src='../img/logo_sans_fond.png' class="imgMobil">
				<p id="iconeCopro" class="navAdmin coproMobil"><i class="fas fa-house-user"></i> Copropriété </p><
				<p id="iconeUser" class="navAdmin userMobil"><i class="fas fa-users"></i> Utilisateur </p>
				<a class="deconnexionMobil" href="../index.php"> <i class="fas fa-power-off"></i> </a>
		</header>
		<div class="container backgroundContainer">
			<div id="divAjoutCopro" class="msgbox row d-none">
				<h1 class="col-11">Ajouter une copropriété</h1>
				<div class="col-1"><i id="exitAjout" class="fas fa-times fa-3x croixAjout"></i></div>
				<div class="col-5 droite">Nom :</div>
				<div class="col-7"><input id="imputNom" type="text" /></div>
				<div class="col-5 droite">Adresse :</div>
				<div class="col-7"><input id="inputAdresse" type="text"/></div>
				<div class="col-5 droite">Ville :</div>
				<div class="col-7"><input id="inputVille" type="text"/></div>	
				<div class="col-5 droite">Code postal :</div>
				<div class="col-7"><input id="inputCodePostal" type="number"/></div>	
				<div class="col-12 divBtnVal"><input id="btnAjout" type="button" value="Valider"/></div>
			</div>
			<div id="divAjoutUser" class="msgbox row d-none">
				<h1 class="col-11">Ajouter une personne</h1>
				<div class="col-1"><i id="exitAjoutUser" class="fas fa-times fa-3x croixAjout"></i></div>
				<div class="col-12 divCenter">
					<select id="selectUser">
						<option value=""> Choisissez une personne </option>
					</select> qui est 
					<select id="selectUser">
						<option value="C"> copoprietaire </option>
						<option value="G"> gestionnaire </option>
					</select>
				</div>
				<div class="col-12 divBtnVal"><input id="btnAjoutUser" type="button" value="Valider"/></div>
			</div>
			<div id="divCoproprietes">
				<h1 class="divCenter">Les copropriétés sur l'application</h1>
				<p class="ajoutCopro"><i class="fas fa-plus"></i> Copropriété</p>
				<div id="divCopro1" class="divCopropriete row">
					<div class="col-12">
						<h2 class="titreNom"> Sainte herves de la Rue pierre </h2>
						<p class="sousTitreLieu">à Rodez</p>
					</div>
					<div class="col-6 edit">
						<i class="far fa-edit fa-2x"></i>
					</div>
					<div class="col-6 ">
						<i class="fas fa-trash fa-2x sup"></i>
					</div>
					<br/><br/>
					<div class="col-12 ajoutCenter">
						<p id="ajoutUser" class="ajout divCenter"><i class="fas fa-plus"></i> user</p>
					</div>
					<div class="col-12 divCenter">
						<h3 class="titreRubrique"> Gestionnaire :</h3>
						<div class="row">
							<div class="col-sm-2 d-none d-sm-block"> ID</div>
							<div class="col-sm-4 d-none d-sm-block"> NOM</div>
							<div class="col-sm-4 d-none d-sm-block"> PRENOM</div>
							<div class="col-sm-2"></div>
						</div>

						<!-- Recherche des gestionnaire de copropriété-->
						<?php
							$reqPrep = $pdo->prepare("SELECT * FROM gestionnaire JOIN utilisateur ON utilisateur.id = gestionnaire.id_utilisateur");
							$reqPrep->execute();
							while ($res = $reqPrep->fetch()) { ?>
								
								<div id="<?php echo 'userG'.$res['ID_UTILISATEUR'];?>" class="row">
									<div class="col-12 col-sm-2"><input type="number" value="<?php echo $res['ID_UTILISATEUR']; ?>" disabled class="inputUser"></div>
									<div class="col-12 col-sm-4"><input type="text" value="<?php echo $res['NOM']; ?>" disabled class="inputUser"></div>
									<div class="col-12 col-sm-4"><input type="text" value="<?php echo $res['PRENOM']; ?>" disabled class="inputUser"></div>
									<div class="col-12 col-sm-2"><i class="fas fa-user-minus fa-2x sup"></i></div>
								</div>

						<?php
							}
						?>
		

					</div>
					
					<div class="col-12 divCenter">
						<br/><br/>
						<h3 class="titreRubrique"> Copropriétaire :</h3>
						<div class="row">
							<div class="col-sm-2 d-none d-sm-block"> ID</div>
							<div class="col-sm-4 d-none d-sm-block"> NOM</div>
							<div class="col-sm-4 d-none d-sm-block"> PRENOM</div>
							<div class="col-sm-2"></div>
						</div>

						<!-- Recherche des gestionnaire de copropriété-->
						<?php
							$reqPrep = $pdo->prepare("SELECT * FROM coproprietaire JOIN utilisateur ON utilisateur.id = coproprietaire.id_utilisateur");
							$reqPrep->execute();
							while ($res = $reqPrep->fetch()) { ?>
								
								<div class="row">
									<div class="col-12 col-sm-2"><input type="number" value="<?php echo $res['ID_UTILISATEUR']; ?>" disabled class="inputUser"></div>
									<div class="col-12 col-sm-4"><input type="text" value="<?php echo $res['NOM']; ?>" disabled class="inputUser"></div>
									<div class="col-12 col-sm-4"><input type="text" value="<?php echo $res['PRENOM']; ?>" disabled class="inputUser"></div>
									<div class="col-12 col-sm-2"><i class="fas fa-user-minus fa-2x sup"></i></div>
								</div>

							<?php }	?>
					</div>
				</div>
				<div id="divCopro2" class="divCopropriete row">
							</div>
			</div>
			<div id="divUsers" class="d-none divCenter">
				<h1 class="titre">Utilisateur de l'application</h1><br/><br/><br/>

				<!-- Recherche des gestionnaire de copropriété-->
				<?php
					$reqPrep = $pdo->prepare("SELECT * FROM  utilisateur");
					$reqPrep->execute();
					while ($res = $reqPrep->fetch()) { ?>
				
				<div id='<?php echo 'user'.$res['ID']?>' class="row ">
					<div class="col-6 col-sm-1"> ID</div>
					<div class="col-6 col-sm-3"><input id='<?php echo 'idUser'.$res['ID']?>' type="number" value="<?php echo $res['ID'] ?>" disabled></div>
					<div class="col-6 col-sm-1"> NOM</div>
					<div class="col-6 col-sm-3"><input id='<?php echo 'nomUser'.$res['ID']?>' type="text" value="<?php echo $res['NOM'] ?>" disabled></div>
					<div class="col-6 col-sm-1"> PRENOM</div>
					<div class="col-6 col-sm-3"><input id='<?php echo 'prenomUser'.$res['ID']?>' type="text" value="<?php echo $res['PRENOM'] ?>" disabled></div>
					<div class="col-6 col-sm-1">MDP</div>
					<div class="col-6 col-sm-3"><input id='<?php echo 'mdpUser'.$res['ID']?>' type="text" value="<?php echo $res['MOT_DE_PASSE'] ?>" disabled ></div>
					<div class="col-6 col-sm-1">ADRESSE</div>
					<div class="col-6 col-sm-3"><input id='<?php echo 'adresseUser'.$res['ID']?>' type="text" value="<?php echo $res['ADRESSE'] ?>" disabled></div>
					<div class="col-6 col-sm-1" >VILLE</div>
					<div class="col-6 col-sm-3" ><input id='<?php echo 'villeUser'.$res['ID']?>' type="text" value="<?php echo $res['VILLE'] ?>" disabled ></div>
					<div class="col-6 col-sm-1" >CODE POSTAL</div>
					<div class="col-6 col-sm-3" ><input id='<?php echo 'CPUser'.$res['ID']?>' type="text" value="<?php echo $res['CODE_POSTAL'] ?>" disabled ></div>
					<div class="col-6 col-sm-1" >TEL</div>
					<div class="col-6 col-sm-3" ><input id='<?php echo 'telUser'.$res['ID']?>' type="number" value="<?php echo $res['TELEPHONE'] ?>" disabled ></div>
					<div class="col-6 col-sm-1">Mail</div>
					<div class="col-6 col-sm-3"><input id='<?php echo 'mailUser'.$res['ID']?>' type="text" value="<?php echo $res['MAIL'] ?>" disabled></div>
					<div class="col-12"><input id="<?php echo 'btnUser'.$res['ID']?>" type="button" value="Valider" class="d-none btnModifUser"></div><br/><br/>
					<div class="col-12"><i id="<?php echo 'sup'.$res['ID']?>" class="fas fa-user-minus fa-2x sup"></i><i id="<?php echo 'edit'.$res['ID']?>" class="fas fa-user-edit fa-2x editUser"></i></div>
					<div class="col-12"><p>----------------------------------------</p></div>
				</div>

					<?php } ?>
			</div>
		</div>
		<footer class="footer">
			<p>Mentions légales</p>
		</footer>
	</body>
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/jsAdmin.js"></script>
</html>