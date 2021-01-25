<html>
    <head>
		<title> SyndicSaaS propriétaire </title>
		<link href="../bootstrap/CSS/bootstrap.css" rel="stylesheet">
		<link href="../fontawesome/css/all.css" rel="stylesheet">
		<link href="../css/proprietaire.css" rel="stylesheet">
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
			<div class="msgBox row">
				<h1 class="col-11">Envoyer mail</h1>
				<h1 class="col-1">X</h1>
				<p class="col-3">Titre :</p>
				<input type="text" class="col-9 inputMsgBox"/>
				
			</div>
			<div id="divUsers" class="divCenter">
				<div class="col-12">
					<h2 class="titreNom"> Sainte herves de la Rue pierre </h2>
				</div>
				<br/><br/>
				<div class="col-12 divCenter">
					<p class="ajout mail"><i class="fas fa-envelope"></i>Contacter probèmes</p>
				</div>
				<div class="row">
					<div class="col-6 d-sm-none"> Date </div>
					<div class="col-6 col-sm-3"><input type="number" value="1" disabled></div>
					<div class="col-6 d-sm-none"> Somme </div>
					<div class="col-6 col-sm-3"><input type="text" value="Dumas" disabled></div>
					<div class="col-6 d-sm-none"> Echeancier </div>
					<div class="col-6 col-sm-3"><input type="text" value="Michel" disabled></div>
					<div class="col-6 d-sm-none"> Payer </div>
					<div class="col-6 col-sm-3"><input type="text" value="MichelD" disabled ></div>
					<div class="col-12"><p>----------------------------------------</p></div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<p>Mention légal</p>
		</footer>
	</body>
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/headerAdmin.js"></script>
</html>