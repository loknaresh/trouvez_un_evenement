<body> 
        <?php
        //$page="nouveau_even";
        
		require ('header.php');
		?> 
        <form action="enregistrement_adresse.php" method="post" autocomplete="off">
            <div class="div-gauche">         
            
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




