<!DOCTYPE html>
<html>
<head>
	<title>Informations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
	<!-- fichier 4/ -->

	<?php
    function enregistrer($nom, $prenom, $naissance, $numero, $adresse,$mail, $mdp)
    {
        try{
        //se connecter à la base 
        require('bd.php');
            $req="INSERT INTO utilisateur (nom, prenom,date_naissance,numero_tel,adresse,email,mdp) VALUES('".$nom."','".$prenom."','".$naissance."','".$numero."','".$adresse."','".$mail."','".$mdp."')";
            $rep = getBD()->query($req);

        }
        catch( Exception $e)
        {
            die ('Erreur :'.$e->getMessage());
        }
    }
        if(($_POST['nom']=="") || ($_POST['prenom']=="") || ($_POST['date']=="") || ($_POST['tel']=="") || ($_POST['adr']=="")  || ($_POST['mail']=="")
        ||($_POST['mdp1']!=$_POST['mdp2']))
        {
            echo '<meta http-equiv="Refresh" content="3; page_inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST['prenom'].'&date='.$_POST['date'].
            '&tel='.$_POST['tel'].'&adr='.$_POST['adr'].'&mail='.$_POST['mail'].'"/>';
        }

   	
			
        else {  
            enregistrer($_POST['nom'], $_POST['prenom'],  $_POST['date'],$_POST['tel'], $_POST['adr'], $_POST['mail'], $_POST['mdp1']);
			
            echo '<meta http-equiv="Refresh" content="0; connexion.php"/>';

        }

        ?>
    </head>
   
</html>

