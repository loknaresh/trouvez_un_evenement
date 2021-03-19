<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>version 3 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Mon premier fichier () / -->
</head>
<body>
	<?php 
		require('bd.php');
		$connexion=getBD();
		$rep = $connexion ->query('select * from evenement');

	
	?>
	

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
					<?php
						if (isset($_SESSION['utilisateur']))
						{
							echo"<br>";
							echo"  Bonjour et Bienvenue ";
							echo " ";
							echo $_SESSION['utilisateur']["prenom"];
							echo " ";
							echo $_SESSION['utilisateur']["nom"];
							echo " ! ";
							echo"<br>";
							echo'<a href="deconnexion.php">Deconnexion</a>';
						}
						else
						{
							echo "<li><a href='page_inscription.php'> S'inscrire</a></li>";
							echo "<li><a href='connexion.php'>Se connecter</a></li>";
						}
						?>
				</ul>
			</nav>
		</div>
	</header>

	<br>

	<div class="content-container">

		<div class="div-gauche">
			<input type="text" placeholder="Rechercher..." name="search" autocomplete="off">
			<br>
			<br>
			<br>
			<p>...</p>
			<br>
			<br>
			<br>
		</div>
		<div class="div-droite">
			<p>AFFICHER LES EVENEMENTS</p>
		</div>

	</div>


</body>
</html>
