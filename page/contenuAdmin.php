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
			<div id="divCoproprietes">
				<h1 class="divCenter">Les copropriétés sur l'application</h1>
				<p class="ajoutCopro"><i class="fas fa-plus"></i> Copropriété</p>
				<div id="divCopro1" class="divCopropriete row">
					<div class="col-12">
						<h2 class="titreNom"> Sainte herves de la Rue pierre </h2>
					</div>
					<div class="col-6 edit">
						<i class="far fa-edit fa-2x"></i>
					</div>
					<div class="col-6 ">
						<i class="fas fa-trash fa-2x sup"></i>
					</div>
					<br/><br/>
					<div class="col-12 ajoutCenter">
						<p class="ajout divCenter"><i class="fas fa-plus"></i> user</p>
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
								
								<div class="row">
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
			</div>
			<div id="divUsers" class="d-none divCenter">
				<h1 class="titre">Utilisateur de l'application</h1><br/><br/><br/>

				<!-- Recherche des gestionnaire de copropriété-->
				<?php
					$reqPrep = $pdo->prepare("SELECT * FROM  utilisateur");
					$reqPrep->execute();
					while ($res = $reqPrep->fetch()) { ?>
				
				<div class="row">
					<div class="col-6 col-sm-1"> ID</div>
					<div class="col-6 col-sm-3"><input type="number" value="<?php echo $res['ID'] ?>" disabled></div>
					<div class="col-6 col-sm-1"> NOM</div>
					<div class="col-6 col-sm-3"><input type="text" value="<?php echo $res['NOM'] ?>" disabled></div>
					<div class="col-6 col-sm-1"> PRENOM</div>
					<div class="col-6 col-sm-3"><input type="text" value="<?php echo $res['PRENOM'] ?>" disabled></div>
					<div class="col-6 col-sm-1">MDP</div>
					<div class="col-6 col-sm-3"><input type="text" value="<?php echo $res['MOT_DE_PASSE'] ?>" disabled ></div>
					<div class="col-6 col-sm-1">ADRESSE</div>
					<div class="col-6 col-sm-3"><input type="text" value="<?php echo $res['ADRESSE'] ?>" disabled></div>
					<div class="col-6 col-sm-1" >COMPLEMENT</div>
					<div class="col-6 col-sm-3" ><input type="text" value="<?php echo $res['COMPLEMENT_ADRESSE'] ?>" disabled ></div>
					<div class="col-6 col-sm-1" >TEL</div>
					<div class="col-6 col-sm-3" ><input type="number" value="<?php echo $res['TELEPHONE'] ?>" disabled ></div>
					<div class="col-6 col-sm-1">Mail</div>
					<div class="col-6 col-sm-3"><input type="text" value="<?php echo $res['MAIL'] ?>" disabled></div>
					<div class="col-12"><i class="fas fa-user-minus fa-2x sup"></i><i class="fas fa-user-edit fa-2x editUser"></i></div>
					<div class="col-12"><p>----------------------------------------</p></div>
				</div>

					<?php } ?>
			</div>
		</div>
		<footer class="footer">
			<p>Mentions légales</p>
		</footer>
	</body>
	<div class="modificationUser">
	</div>
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/headerAdmin.js"></script>
</html>