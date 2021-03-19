<!DOCTYPE html>
<html>
<head>
	<title>S'inscrire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- fichier 3 / -->
</head>
<body>
	<header>
		<div class="container">
			<a href="index.php"><img src="logo2.png" alt="logo" class="logo"></a>
			<nav>
				<ul>
					<li><a href="#">Rechercher</a></li>
					<li><a href="#">Organiser</a></li>
					<li><a href="#">Consulter Carte Geographique</a></li>
					<li><a href="#">Consulter Calendrier</a></li>
					<li><a href="#">Nous Contacter</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="div-droite">
		<p>Bienvenue sur la page d'inscription:</p>
		<form action="refresh.php" method="post" autocomplete="off">
			<p>
				Nom
				<input type="text" name="nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom']; ?>"/>
			</p>
			
			<p>
				Prenom
				<input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom']; ?>"/>
			</p>

			<p>
				Date de naissance
				<input type="date" name="date" value="<?php if(isset($_POST['date'])) echo $_POST['date']; ?>"/>
			</p>

			<p>
				Numero Telephone
				<input type="text" name="tel" value="<?php if(isset($_POST['tel'])) echo $_POST['tel']; ?>"/>
			</p>

			<p>
				Addresse
				<input type="text" name="adr" value="<?php if(isset($_POST['adr'])) echo $_POST['adr'];?>"/>
			</p>

			<p>
				Mail
				<input type="text" name="mail" value="<?php if(isset($_POST['mail'])) echo $_POST['mail']; ?>"/>
			</p>

			<p>
				Mot de passe
				<input type="password" name="mdp1" value=""/>
			</p>		

			<p>
				Confirmer Mot de passe
				<input type="password" name="mdp2" value=""/>
			</p>

			<input type="submit" name="envoyer" value="Envoyer"/>

		</form>
	</div>


</body>
</html>