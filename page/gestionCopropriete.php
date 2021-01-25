<?php  /*$pdo = new PDO('mysql:host=localhost;dbname=syndicsaas', 'root', '');  */?>

<html>
    <head>
		<title> SyndicSaaS Gestionnaire Copropriété </title>
		<link href="../bootstrap/CSS/bootstrap.css" rel="stylesheet">
		<link href="../fontawesome/css/all.css" rel="stylesheet">
		<link href="../css/contenuPageGestion.css" rel="stylesheet">
	</head>
	<body class="background">
		<header class="headerPcTab d-none d-sm-block">
				<img src='../img/logo_sans_fond.png' class="imgPcTab">
				<a class="deconnexion" href="../index.php"> <i class="fas fa-power-off"></i> </a>
		</header>
		<header class="headerMobil d-block d-sm-none">
				<img src='../img/logo_sans_fond.png' class="imgMobil">
				<a class="deconnexionMobil" href="../index.php"> <i class="fas fa-power-off"></i> </a>
		</header>
		<div class="container backgroundContainer">
			<div id="divCoproprietes">
				<h1 class="divCenter">Vos copropriétés</h1>
				<div id="divCopro1" class="divCopropriete row">
					<div class="col-12">
						<h2 class="titreNom"> Sainte herves de la Rue pierre </h2>
					</div>
					<br/><br/>
					<div class="col-12 divCenter">
						<p class="ajout convo"><i class="fas fa-users "></i> Convocation assemblé</p>
					</div>
					<div class="col-6 textBudget">
						<p>Gestion des budgets mensuel</p>
					</div>
					<div class="col-6">
						<input type="text" />
					</div>
					<div class="col-6 textBudget">
						<p>Gestion des budgets trimestriel</p>
					</div>
					<div class="col-6">
						<input type="text" />
					</div>
					<div class="col-6 textBudget">
						<p>Gestion des budgets annuel</p>
					</div>
					<div class="col-6">
						<input type="text" />
					</div>
					<div class="col-12 divCenter">
						<h3 class="titreRubrique"> Gestionnaire des propriétaires :</h3>
						<div></div>
						<div class="row">
							<div class="col-sm-2 d-none d-sm-block"> ID</div>
							<div class="col-sm-4 d-none d-sm-block"> NOM</div>
							<div class="col-sm-4 d-none d-sm-block"> PRENOM</div>
							<div class="col-sm-2"></div>
						</div>
						<div class="row">
							<div class="col-12 col-sm-2"><input type="number" value="1" disabled class="inputUser"></div>
							<div class="col-12 col-sm-4"><input type="text" value="Dumas" disabled class="inputUser"></div>
							<div class="col-12 col-sm-4"><input type="text" value="Michel" disabled class="inputUser"></div>
							<div class="col-12 col-sm-2"><input type="number" class="inputUser" placeholder="millieme"></div>
						</div>
					</div>
					
					
				</div>
			</div>
		<div>
		<footer class="footer">
			<p>Mention légal</p>
		</footer>
	</body>
	<div class="modificationUser">
	</div>
	<script type="text/javascript" src="../jquery/jquery.js"></script>
</html>