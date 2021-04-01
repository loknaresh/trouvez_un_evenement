<!DOCTYPE html>
<html>
<head>
	<title>Adresse</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
	<!-- fichier 4/ -->

	<?php
        require('bd.php');
        function enregistrer($place, $adresse, $departement, $region, $quartier,$ville)
        {
            try{
            //se connecter à la base
                $req="INSERT INTO adresse (place,adresse,departement,region,quartier,ville) VALUES('".$place."','".$adresse."','".$departement."','".$region."','".$quartier."','".$ville."')";
                $rep = getBD()->query($req);

            }
            catch( Exception $e)
            {
                die ('Erreur :'.$e->getMessage());
            }
        }
        if(($_POST['place']=="") || ($_POST['adresse']=="") || ($_POST['dep']=="") || ($_POST['region']=="") || ($_POST['ville']==""))
        {
            echo '<meta http-equiv="Refresh" content="0; adresse.php?place='.$_POST['place'].'&adresse='.$_POST['adresse'].'&dep='.$_POST['dep'].
            '&region='.$_POST['region'].'&ville='.$_POST['ville'].'"/>';
        }
        
        else 
        {  
            $connexion =getBD();
            $req = $connexion->query('select * from adresse  ');
            
            $adresse=$req->fetch();
           
            var_dump($adresse);
            if(($_POST['place']==$adresse['place']) && ($_POST['adresse']==$adresse['adresse']) &&
             ($_POST['dep']==$adresse['departement']) && ($_POST['region']==$adresse['region']) &&
             ($_POST['quartier']==$adresse['quartier']) && ($_POST['ville']==$adresse['ville']))
              
             $connexion =getBD();
             $re = $connexion->query('select adresse_id from adresse  ');
             $ligne=$re->fetch();
              var_dump($re);
            {
                echo $adresse["adresse_id"];
                echo " <br>";
                $identifiant=$ligne["adresse_id"];
                echo " <br>";
                echo $identifiant;
                echo " <br>";
                print_r($adresse["adresse_id"]);
                
                

            }
           // else
            //{
               // enregistrer($_POST['place'], $_POST['adresse'],  $_POST['dep'],$_POST['region'], $_POST['quartier'], $_POST['ville']);
               // echo '<meta http-equiv="Refresh" content="0; index.php"/>';
           // }
            

        }

        ?>
    </head>
   
</html>

