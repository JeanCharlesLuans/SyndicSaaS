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
						<div class="row">
							<div class="col-12 col-sm-2"><input type="number" value="1" disabled class="inputUser"></div>
							<div class="col-12 col-sm-4"><input type="text" value="Dumas" disabled class="inputUser"></div>
							<div class="col-12 col-sm-4"><input type="text" value="Michel" disabled class="inputUser"></div>
							<div class="col-12 col-sm-2"><i class="fas fa-user-minus fa-2x sup"></i></div>
						</div>
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
						<div class="row">
							<div class="col-12 col-sm-2"><input type="number" value="1" disabled class="inputUser"></div>
							<div class="col-12 col-sm-4"><input type="text" value="Dumas" disabled class="inputUser"></div>
							<div class="col-12 col-sm-4"><input type="text" value="Michel" disabled class="inputUser"></div>
							<div class="col-12 col-sm-2"><i class="fas fa-user-minus fa-2x sup"></i></div>
							<div class="col-12 d-none"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="divUsers" class="d-none divCenter">
				<h1 class="titre">Utilisateur de l'application</h1><br/><br/><br/>
				<div class="row">
					<div class="col-6 col-sm-1"> ID</div>
					<div class="col-6 col-sm-3"><input type="number" value="1" disabled></div>
					<div class="col-6 col-sm-1"> NOM</div>
					<div class="col-6 col-sm-3"><input type="text" value="Dumas" disabled></div>
					<div class="col-6 col-sm-1"> PRENOM</div>
					<div class="col-6 col-sm-3"><input type="text" value="Michel" disabled></div>
					<div class="col-6 col-sm-1">LOGIN</div>
					<div class="col-6 col-sm-3"><input type="text" value="MichelD" disabled ></div>
					<div class="col-6 col-sm-1">MDP</div>
					<div class="col-6 col-sm-3"><input type="text" value="1234" disabled></div>
					<div class="col-6 col-sm-1" >ADRESSE</div>
					<div class="col-6 col-sm-3" ><input type="text" value="123 rue de brest" disabled ></div>
					<div class="col-6 col-sm-1" >TEL</div>
					<div class="col-6 col-sm-3" ><input type="number" value="0604020305" disabled ></div>
					<div class="col-6 col-sm-1">Mail</div>
					<div class="col-6 col-sm-3"><input type="text" value="Dumas@gmail.com" disabled></div>
					<div class="col-12"><i class="fas fa-user-minus fa-2x sup"></i><i class="fas fa-user-edit fa-2x editUser"></i></div>
					<div class="col-12"><p>----------------------------------------</p></div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<p>Mention légal</p>
		</footer>
	</body>
	<div class="modificationUser">
	</div>
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/headerAdmin.js"></script>
</html>