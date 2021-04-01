<!DOCTYPE html>
<html>
    <head>
	<title>Ajouter un evenement </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	 <!-- fichier 9 -->
     <style>
         
            .div-gauche
            {
	            width: 80%;
                border:2px solid red;
                background: #55d6aa;
                margin: 40px auto 40px auto;
                padding-left:90px;
                font-size:17px;
            }
            p
            {
                padding-left:7%;
            }
            td>input
            {
                margin-top:10px;
                border:2px solid red;
                width:300px;
                height:20px;
            }
            textarea
            {
                width:300px; 
            }
        </style>
          
    </head>
    <body> 
        <?php
        $page="nouveau_even";
		require ('header.php');
		?> 
        <form action="enregistrement.php" method="post" autocomplete="off">
            <div class="div-gauche">         
            
                <table>
                    <tr>
                        <td>
                            Adresse_id 
                        </td>
                        <td>
                            <input type="text" name="adresse" value="<?php if(isset($_POST['adresse'])) echo $_POST['adresse']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Lien 
                        </td>
                        <td>
                            <input type="text" name="lien" value="<?php if(isset($_POST['lien'])) echo $_POST['lien']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Information Pratique
                        </td>
                        <td>
                            <input type="text" name="information" value="<?php if(isset($_POST['information'])) echo $_POST['information'];?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Titre
                        </td>
                        <td>
                            <input  type="text" name="titre" value="<?php if(isset($_POST['titre'])) echo $_POST['titre']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Description
                        </td>
                        <td>
                            <textarea  name="description_even" value="<?php if(isset($_POST['description_even'])) echo $_POST['description_even']; ?>"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Detail
                        </td>
                        <td>
                            <input type="text" name="detail" value="<?php if(isset($_POST['detail'])) echo $_POST['detail']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Mot clés
                        </td>
                        <td>
                            <input type="text" name="mot_cles" value="<?php if(isset($_POST['mot_cles'])) echo $_POST['mot_cles']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Latlon 
                        </td>
                        <td>
                            <input type="text" name="latlon" value="<?php if(isset($_POST['latlon'])) echo $_POST['latlon']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Tarif 
                        </td>
                        <td>
                            <input type="text" name="tarif" value="<?php if(isset($_POST['tarif'])) echo $_POST['tarif']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Program uid 
                        </td>
                        <td>
                            <input type="text" name="program_uid" value="<?php if(isset($_POST['program_uid'])) echo $_POST['program_uid']; ?>"/>
                        </td>
                    </tr>

                    
                    <tr>
                        <td>
                            Date de mise à jour
                        </td>
                        <td>
                            <input type="date" name="date_mise_jour" value="<?php if(isset($_POST['date_mise_jour'])) echo $_POST['date_mise_jour']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date de debut
                        </td>
                        <td>
                            <input type="date" name="date_debut" value="<?php if(isset($_POST['date_debut'])) echo $_POST['date_debut']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Heure debut
                        </td>
                        <td>
                            <input type="time" name="heure_debut" value="<?php if(isset($_POST['heure_debut'])) echo $_POST['heure_debut']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date de fin
                        </td>
                        <td>
                            <input type="date" name="date_fin" value="<?php if(isset($_POST['date_fin'])) echo $_POST['date_fin']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Heure de fin
                        </td>
                        <td>
                            <input type="time" name="heure_fin" value="<?php if(isset($_POST['heure_fin'])) echo $_POST['heure_fin']; ?>"/>
                        </td>
                    </tr>
                    
                </table>
                <p>
                    <input type="submit" value="Envoyer">
                </p>
                
            </div>
        </form>
        <?php 
		require ('footer.php');
		?> 
    </body>
</html>




