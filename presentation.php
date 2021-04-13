<!DOCTYPE html>
    <head>
		<title>version 3 </title>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .div-milieu
            {
                background: white;
                border:1px solid red;
                margin: 10px;
                margin-bottom: 0px;
                margin-right: 5px;
                padding: 50px;
            }
            strong{
                color: #999999;
                font-variant: small-caps;
                font-size: 18px;
            }
        </style>
		<!-- Mon premier fichier () / -->
	</head>
<html>
    <body>
    <?php
		 require ('header.php');
		?> 
        <p class="div-milieu"> 
            MOHAMED MZE Raissa et Loknaresh Ujoodha sommes deux etudiants en licence 3 de mathematiques et informatique appliquées 
            aux science humaines et social (MIAHS) à l'université Paul Valey Montpellier 3.</br>
            Nous avons choisis pour notre projet de creer un site internet appelé <strong> Trouvez votre evenement </strong>qui a  pour objectif de vous faciliter vos differentes  
            recherche d'evenement se deroulant dans la ville de Montpellier.Nous voudrons par la suite elargir les perimetre de 
            recherche c'est à dire faciliter la rechreche dans les autres villes de la france (Paris, Marseille, Lyon etc). 
            Une fois que vous aurez creer votre comptes dans notre site, vous aurez la possibilité d'ajouter d'autres
            événements.
 
        </p>
        <?php 
         $page="presentation";
		require ('footer.php');
		?>
    </body>
</html>