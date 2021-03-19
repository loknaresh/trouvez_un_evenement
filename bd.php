<?php
	//fichier 2
	function getBD(){
		$bdd= new PDO('mysql:host=localhost;dbname=trouvez_votre_evenement;charset=utf8', 'root', '');
		return $bdd;
		}
	
	?>