<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <title>enregistrement</title>
        
        <!-- Mon fichier 10() / -->
        <?php
            require('bd.php');
            $req='select utilisateur_id from utilisateur where email="'.$_SESSION['utilisateur']["mail"].'"';
            $rep = getBD()->query($req);
            $utilisateur=$rep->fetch();
            //echo $req;
            function enregistrer($utilisateur_id,$adresse, $lien, $information_pratique, $titre, $description_even, $detail, $mot_cles, $latlon,
            $tarif, $program_uid, $date_mise_jour, $date_debut, $heure_debut, $date_fin, $heure_fin)
            {
                try{
                //inclure un fichier dans un ficher. 
                
                    
                    $req="INSERT INTO evenement (utilisateur_id,adresse_id , lien, information_pratique, titre, description_even, detail,
                    mot_cles, latlon, tarif, program_uid, date_mise_jour, date_debut, heure_debut, date_fin, heure_fin)
                    VALUES('".$utilisateur_id."','".$adresse."','".$lien."','".$information_pratique."','".$titre."','".$description_even."','".$detail."',
                    '".$mot_cles."','".$latlon."','".$tarif."','".$program_uid."','".$date_mise_jour."','".$date_debut."',
                    '".$heure_debut."','".$date_fin."','".$heure_fin."')";
                    //echo $req;
                    
                    $rep = getBD()->query($req);
                    
                }
                catch( Exception $e)
                {
                    die ('Erreur :'.$e->getMessage());
                }
            }

            if(($_POST['adresse']=="") || ($_POST['lien']=="") || ($_POST['information']=="") || ($_POST['mot_cles']=="") || ($_POST['tarif']=="") || ($_POST['date_debut']==""))
            {
                echo '<meta http-equiv="Refresh" content="0; nouveau_even.php?adresse='.$_POST['adresse'].'&lien='.$_POST['lien'].'&information_pratique='.$_POST['information'].'&mot_cles='.$_POST['mot_cles'].'&tarif='.$_POST['tarif'].'&date_debut='.$_POST['date_debut'].'"/>';
            }
                
            else 
            {  
                enregistrer($utilisateur['utilisateur_id'],$_POST['adresse'], $_POST['lien'], $_POST['information'], $_POST['titre'], $_POST['description_even'],
                $_POST['detail'], $_POST['mot_cles'], $_POST['latlon'], $_POST['tarif'], $_POST['program_uid'], $_POST['date_mise_jour'],
                $_POST['date_debut'], $_POST['heure_debut'], $_POST['date_fin'], $_POST['heure_fin']);

                echo '<meta http-equiv="Refresh" content="0; index.php"/>';

            }

        ?>
    </head>
   
</html>







