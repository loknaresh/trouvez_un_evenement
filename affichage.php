 <!DOCTYPE html>
<html>
	<head>
		<title>version 3 </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Mon premier fichier () /
      str_replace ( $texte_recherche , $texte_remplacement , $contenu_initial );
                    SELECT REPLACE('Hello tout le monde', 'Hello', 'Bonjour'); -->
        <style>
            body{
                background-color: white;
            }
            .affichage
            {
                width:50%;
                margin-left:auto;
                margin-right:auto;
            }
            h2
            {
            color:red;
            padding-left:30px;
            font-style: italic;
            font-variant: small-caps;
            font-size: 25px;
            }
            </style>
	</head>
	<body>
        <?php
            require ('header.php');
        ?>
       
        <div class="affichage">
            <?php
            {
                try
                {
                    $req=" SELECT * 
                    FROM evenement,adresse
                    where adresse.adresse_id=evenement.adresse_id
                    AND ( 0 ";
                    if( $_GET['lieu'] != "" )
                        $req.= 'OR adresse.adresse LIKE "%'.$_GET['lieu'].'%"';
                    if( $_GET['even'] != "" )
                        $req.= 'OR evenement.titre LIKE "%'.$_GET['even'].'%"';
                    if( $_GET['date'] != "" )
                        $req.= 'OR evenement.date_debut LIKE "%'.$_GET['date'].'%"';
                    if( $_GET['heure'] != "" )
                        $req.= 'or evenement.heure_debut LIKE "%'.$_GET['heure'].'%" ';
                    if( $_GET['tarif'] != "" )
                        $req.= 'or evenement.tarif LIKE "%'.$_GET['tarif'].'%" ';
                    $req.=") GROUP by evenement.date_debut DESC";
                    
                    $rep = getBD()->query($req);
                  
        
                }
                catch( Exception $e)
                {
                    die ('Erreur :'.$e->getMessage());
                }
            }
            if(($_GET['even']=="") || ($_GET['date']==""))
            {
                echo '<meta http-equiv="Refresh" content="0; index.php?msg_error=saisir au moins l\'évévement et la date"/>';
                
            }

            else 
            {  
                while ($ligne = $rep ->fetch())
                {	
                    echo "</br>";
                    echo "<h2>".$ligne['titre']."</h2>";
                    if($ligne['information_pratique']!="")
                    {
                        echo "<b>Information pratique : </b>" .$ligne['information_pratique'];
                        echo "</br>";
                    }
                    if($ligne['description_even']!="")
                    {
                        echo "<b>Description de l'événement : </b>" .$ligne['description_even'];
                        echo "</br>";
                    }
                    if($ligne['detail']!="")
                    {
                        echo "<b>Détails : </b>" .$ligne['detail'];
                        echo "</br>";
                    }
                    echo "</br>";
                    if($ligne['tarif']!="")
                    {
                        echo "<b>Tarif : </b>".$ligne['tarif'];
                        echo "</br>";
                    }
                    else
                    {
                        echo "<b>Tarif : </b>Non renseigner"; 
                        echo "</br>";
                    }
                    echo "<i>Du ".$ligne['date_debut']." à ".$ligne['heure_debut']." au ".$ligne['date_fin']." à ".$ligne['heure_fin']."</i>";
                    echo "<h3>lieu de l'evenement :</h3>";
                    if($ligne['adresse']!="")
                    {
                        echo $ligne['adresse'];
                        echo "</br>";
                    }
                    if($ligne['place']!="")
                    {
                        echo $ligne['place'];
                        echo "</br>";
                    }
    
                    if($ligne['quartier']!="")
                    {
                        echo $ligne['quartier'];
                        echo "</br>";
                    }
                    if($ligne['ville']!="")
                    {
                        echo $ligne['ville'];
                        echo ", ";
                    }
                    if($ligne['departement']!="")
                    {
                        echo $ligne['departement'];
                        echo ", ";
                    }
                    if($ligne['region']!="")
                    {
                        echo $ligne['region'];
                        echo "</br>";
                    }
                    echo "</br>";
                    echo "<b>Pour plus d'informations >></b> <a href='".$ligne['lien']."' >".$ligne['lien']."</a>";

                }
            }
            ?>
        </div>
        <?php
            require ('footer.php');
        ?>
    </body>
</html>