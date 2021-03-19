<?php
 session_start();
 ?>
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>connexion</TITLE>
       <!--<link rel="stylesheet" type="text/css" href="style.css"/>-->
        <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
    <!--  fichier 6 / -->
    </HEAD>
    <body>
        <form action="connecter.php" method="POST" autocomplete="off">
        <p>Adresse email :  <input type="email" name="mail" value=""/></p>
        <p>Mot de passe :  <input required type="password" name="mot_de_passe" value=""/></p>
        <p><input type="submit" value="Valider"></p>
        </form>
        <a href="page_inscription.php">Inscription</a>
    </body>
</html>