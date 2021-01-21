<html>
    <head>
		<title> SyndicSaaS Administration </title>
		<link href="../bootstrap/CSS/bootstrap.css" rel="stylesheet">
		<link href="../fontawesome/css/all.css" rel="stylesheet">
		<link href="../css/contenuAdmin.css" rel="stylesheet">
	</head>
	<body class="background">
		<header class="headerPcTab">
				<img src='../img/logo_sans_fond.png' class="imgPcTab">
				<p id="iconeCopro" class="navAdmin copro"><i class="fas fa-house-user"></i> Copropriété </p>
				<p id="iconeUser" class="navAdmin user"><i class="fas fa-users"></i> Utilisateur </p>
				<a class="deconnexion" href="../index.php"> <i class="fas fa-power-off"></i> </a>
		</header>
		<div class="container-sm backgroundContainer">
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
					<div class="col-12">
						<h3 class="titreRubrique"> Gestionnaire de copropriété :</h3>
						<table class="tabUserCo">
							<tr>
								<th > ID</th>
								<th > NOM</th>
								<th > PRENOM</th>
								<th ></th>
							</tr>
							<tr>
								<td > <input type="number" value="1" disabled></td>
								<td ><input type="text" value="Dumas" disabled></td>
								<td ><input type="text" value="Michel" disabled></td>
								<td class="userSup"><i class="fas fa-user-minus sup"></i></td>
							</tr>
						</table>
					</div>
					<div class="col-12">
						<h3 class="titreRubrique"> Copropriétaire :</h3>
						<table class="tabUserCo">
							<tr>
								<th > ID</th>
								<th > NOM</th>
								<th > PRENOM</th>
								<th ></th>
							</tr>
							<tr>
								<td > <input type="number" value="1" disabled></td>
								<td ><input type="text" value="Dumas" disabled></td>
								<td ><input type="text" value="Michel" disabled></td>
								<td class="userSup"><i class="fas fa-user-minus sup"></i></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div id="divUsers" class="d-none">
				<h1 class="titre">Utilisateur de l'application</h1>
				<table class="tabUser" style="boder: solid 3px;">
							<tr>
								<th > ID</th>
								<th > NOM</th>
								<th > PRENOM</th>
								<th >LOGIN</th>
								<th >MDP</th>
								<th >ADRESSE</th>
								<th >TEL</th>
								<th >Mail</th>
								<th ></th>
							</tr>
							<tr>
								<td >1</td>
								<td >Dumas</td>
								<td >Michel</td>
								<td >MichelD</td>
								<td >12345</td>
								<td >123 rue de brest</td>
								<td >0604050505</td>
								<td >test@gmail</td>
								<td ><i class="fas fa-user-minus sup"></i></td>
							</tr>
						</table>
			</div>
		</div>
    </body>
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/headerAdmin.js"></script>
</html>