<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> SyndicSaaS Authentification </title>
		<link href="bootstrap/CSS/bootstrap.css" rel="stylesheet">
		<link href="fontawesome/css/all.css" rel="stylesheet">
		<link href="css/authentification.css" rel="stylesheet">
	</head>
	<body class="background">
		<div class="container fondEcranMenu">
			<div class="col-12 centrerDiv">
				<form action="php/authentification.php" method="post">
					<img src="img/Logo_SyndicSaaS.png" alt="logo du groupe" class="logoMenu"><br/><br/>
					<h1>Authentifiez-vous :</h1>
					<?php
						if (isset($_GET['error']) && $_GET['error'] == "true")
							echo '<p class="red">Identifiant ou mot de passe inccorect</p>'
					?>
					<input name="inputIdentifiant" type="text" placeholder="Login">
					<input name="inputMDP" type="text" placeholder="Mot de passe"><br/><br/>
					<input name="connecter" type="submit"  value="Connecter"/>
				</form>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/authentification.js"></script>
</html>