<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Adresse</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
        <!-- fichier 4/ -->
    </head>
    <body>
        <?php
            require('bd.php');
            function enregistrer($place, $adr, $departement, $region, $quartier,$ville)
            {
                try
                {
                    //verifions si l'addresse existe deja
                    $req = getBD()->query ('select * from adresse where place="'.$place.'" and adresse="'.$adr.'" and
                    departement="'.$departement.'" and region="'.$region.'" and quartier="'.$quartier.'" and ville="'.$ville.'"');
                    $adresse=$req->fetch();
                    if($adresse==false)
                    {
                        $req="INSERT INTO adresse (place,adresse,departement,region,quartier,ville) VALUES('".$place."','"
                        .$adr."','".$departement."','".$region."','".$quartier."','".$ville."')";
                        $adresse = getBD()->query($req);
                        
                        $req = getBD()->query ('select * from adresse where place="'.$place.'" and adresse="'.$adr.'" and
                        departement="'.$departement.'" and region="'.$region.'" and quartier="'.$quartier.'" and ville="'.$ville.'"');
                        $adresse=$req->fetch();
                    }
                    return $adresse;

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
                $adresse=enregistrer($_POST['place'], $_POST['adresse'],  $_POST['dep'],$_POST['region'], $_POST['quartier'],
                 $_POST['ville']);
                //echo '<meta http-equiv="Refresh" content="0; nouveau_even.php"/>';
                //var_dump($adresse);
                $adresse_id=$adresse['adresse_id'];
                print( $adresse_id);

            }


        ?>
   </body> 
</html>

