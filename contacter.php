<!DOCTYPE html>
<html>
    <head>
        <title>version 3 </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--  fichier 8 / -->
        <style>
           textarea
           {
            width:600px;
            margin-left:50%;
            margin-top:0%;
            padding:10%;
            border:1px solid red;
           } 
           input{
            margin-left:45%;
            border:1px solid red;
           }
           
        </style>
    </head>
    <body>
        <?php
		    require ('header.php');
		?> 
            <table>
                <tr>
                    <td>
                        <textarea  placeholder=" Rediger votre message" name="description_even" value="<?php if(isset($_POST['description_even'])) echo $_POST['description_even']; ?>"></textarea>
                    </td>
                </tr>
            </table>
            <p>
                <input type="submit" value="Envoyer">
            </p>
        <?php 
         $page="contacter";
		require ('footer.php');
		?>
</body>
</html>
