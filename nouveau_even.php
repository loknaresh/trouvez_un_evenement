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
        <form action="enregistrement.php" enctype="multipart/form-data" method="post" autocomplete="off">
            <div class="div-gauche">         
            
                <table>
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
                            Informations pratiques
                        </td>
                        <td>
                            <input type="text" name="information" value="<?php if(isset($_POST['information'])) echo $_POST['information'];?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Mots clés
                        </td>
                        <td>
                            <input type="text" name="mot_cles" value="<?php if(isset($_POST['mot_cles'])) echo $_POST['mot_cles']; ?>"/>
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
                    <tr>
                        <td>
                           Images
                        </td>
                        <td>
                            <input type="file" name="image[]" multiple="true"/>
                        </td>
                    </tr>
                    
                </table>
              
                <table>
                    <tr>
                        <td>
                            Place
                        </td>
                        <td>
                            <input type="text" placeholder=" faculté de médecine" name="place" value="<?php if(isset($_POST['place'])) echo $_POST['place']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Adresse 
                        </td>
                        <td>
                            <input type="text" placeholder=" 2 Rue de l'école de Médecine, 34000 Montpellier" name="adresse" value="<?php if(isset($_POST['adresse'])) echo $_POST['adresse']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Département
                        </td>
                        <td>
                            <input type="text" placeholder=" Hérault" name="dep" value="<?php if(isset($_POST['dep'])) echo $_POST['dep'];?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Région
                        </td>
                        <td>
                            <input  type="text" placeholder=" Occitanie"  name="region" value="<?php if(isset($_POST['region'])) echo $_POST['region']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Quartier
                        </td>
                        <td>
                            <input type="text" placeholder=" quartier" name="quartier" value="<?php if(isset($_POST['quartier'])) echo $_POST['quartier']; ?>"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Ville
                        </td>
                        <td>
                            <input type="text" placeholder=" ville" name="ville" value="<?php if(isset($_POST['ville'])) echo $_POST['ville']; ?>"/>
                        </td>
                    </tr>
                    
                </table>
   
            </div>
                <p>
                    <input type="submit" value="Envoyer">
                </p>
        </form>
        <?php 
		require ('footer.php');
		?> 
    </body>
</html>




