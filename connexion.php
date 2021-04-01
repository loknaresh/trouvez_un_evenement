
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>connexion</TITLE>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <style>
            .div-droite
            {
	            width: 50%;
                border:2px solid red;
                background: #55d6aa;
                margin: 60px auto 30px auto;
                //flex-grow: 1;
                padding: 40px;
                margin-bootom:30px;

            }
            form
            {
                margin-top: 10%;
                margin-left:30%;
            }
        </style>
     <!-- fichier 6 / -->
    </HEAD>
    <body>
        <?php
        $page="connexion";
		 require ('header.php');
		?> 
        <div class="div-droite"> 
            <a href="index.php"><img src="logo2.png" alt="logo" class="logo"></a>
            <a href="index.php"><img src="logo1.png" alt="logo" class="logo1"></a>
        
            <form action="connecter.php" method="POST" autocomplete="off">
            <p>Adresse email :  <input type="email" name="mail" value=""/></p>
            <p>Mot de passe :  <input required type="password" name="mot_de_passe" value=""/></p>
            <p><input type="submit" value="Valider"></p>
            </form>  
        </div>
        <?php
		require ('footer.php');
		?> 
    </body>
</html>