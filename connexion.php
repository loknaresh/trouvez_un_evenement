
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>connexion</TITLE>
        <link rel="stylesheet" type="text/css" href="style.css"/>
          <!-- fichier 6 / -->
        <style>
            .div-droite
            {
	            width: 15%;
                border:2px solid red;
                background: #55d6aa;
                margin: 0px auto 0px auto;
                padding: 40px;
            }
            input
            {
                border:1px solid red;
                padding-left:15%;
              
            }
            .ch
            {
                margin-left:15%;
                font-size:12px;
            }
            .c{
                margin-left:5%;
                font-weight:bold;
                padding-left:20%;
                padding-right:10%;
            }
            .champ{
                margin-left:15%;
                font-weight:bold;
            }
           
        </style>
    
    </HEAD>
    <body>
        <?php
        $page="connexion";
		 require ('header.php');
		?> 
        <div class="div-droite"> 
            <form action="connecter.php" method="POST" autocomplete="off">
                <p class="champ">Adresse e-mail * </p>
                <p>  <input type="email" placeholder="soprano@gmail.com" name="mail" value=""/></p>
                <p class="champ">Mot de passe *</p>  
                <input required type="password" placeholder="droumbaba&20749" name="mot_de_passe" value=""/></p>
                <p class="c"><input class="btn-primary"  type="submit" value="Valider"></p>
                <p class="ch">Mot de passe oublié?</p>
                <p class="champ">* Champs requis</p>
            </form>  
        </div>
        <?php
		require ('footer.php');
		?> 
    </body>
</html>