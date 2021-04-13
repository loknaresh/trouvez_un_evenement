 
<!DOCTYPE html>
<html>
	<head>
		<title> Trouve ton événement</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Mon premier fichier () / -->
	</head>
	<body>
 		<?php
		 $page="ndex";
		 require ('header.php');
		?> 
		<div class="content-container">
			<form method="GET" action="affichage.php" style="width: 100%;">
				
				<div class="div-gauche" style="margin-left: auto; margin-right: auto;">
					<p style="text-align: center;"> Veuillez saisir au moins l'événement et la date</P>
					<p><input type="text" placeholder="saisir votre évenement" name="even" autocomplete="off"></p>
					<p><input type="text" placeholder=" lieu de l'événement..." name="lieu" autocomplete="off"></p>
					<p><input type="date" placeholder=" date..." name="date" autocomplete="off"></p>
					<p><input type="time" placeholder="heure..." name="heure" autocomplete="off"></p>
					<p><input type="text" placeholder="tarif/gratuit... " name="tarif" autocomplete="off"></p>
				</div>
				<div  style="display: block ruby; text-align: center;">
					<p><input class="btn-primary" type="submit" value="Rechercher"></p>
					<p><input class="btn-secondary" type="reset" value="Rénitialiser"></p>
				</div>
				
			</form>
		</div>
		<?php 
		require ('footer.php');
		?> 
	</body>
</html>
