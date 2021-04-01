 
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
		 $page="ndex";
		 require ('header.php');
		?> 
		<div class="content-container">
			<form>
				<div class="div-gauche">
					
					<p><input type="text" placeholder="saisir votre évenement..." name="search" autocomplete="off"></p>
					<p><input type="text" placeholder=" adresse..." name="search" autocomplete="off"></p>
					<p><input type="text" placeholder="date/heure debut..." name="search" autocomplete="off"></p>
					<p><input type="text" placeholder="date/heure fin..." name="search" autocomplete="off"></p>
					<p><input type="text" placeholder="tarif... " name="search" autocomplete="off"></p>
					<input type="submit" value="Rechercher">
					<div>
					<p><input type="reset" value="Rénitialiser"></p>
					</div>
			</form>
				
			</div>
			<div class="div-droite">
				<p>AFFICHER LES EVENEMENTS</p>

				<?php
					$rep = getBD()->query('select * from evenement where adresse_id=1');
					var_dump($rep);
					//exit();
					
					/*
					echo "<table class='table'>
					<tr>
						<th> Identifiant</th>
						<th>uidentifiant utilisateur</th>
						<th>Description</th>
						<th>Tarif</th>
						<th>Titre</th>
					</tr>";

					while ($ligne = $rep ->fetch())
					{	
						echo "<tr>";
						echo "<td>".$ligne["evenement_id"]."</td>";
						echo "<td>  ".$ligne['utilisateur_id']."</td>";
						echo "<td>".$ligne['description']."</td>";
						echo "<td>".$ligne["tarif"]."</td>";
						echo "<td>".$ligne["titre"]."</td>";
						echo "</tr>";
					}
					echo "</table >";
					$rep ->closeCursor(); */
					
				
				?>
			</div>
		</div>
		<?php 
		require ('footer.php');
		?> 
	</body>
</html>
