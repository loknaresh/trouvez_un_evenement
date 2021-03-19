<?php
 session_start();

 //fichier 5
 
if($_POST['mail']== "" || $_POST['mot_de_passe']== ""){
    echo '<meta http-equiv="Refresh" content="2; connexion.php"/>';
}
else{
    require('bd.php');
    $query = "select * from utilisateur where email='".$_POST ['mail']."' && mdp='".$_POST['mot_de_passe']."'";
    $rep = getBD()->query($query);

    $ligne = $rep->fetch();

    if($ligne!=false){ 
    

        $_SESSION['utilisateur']=array
          
        (
            "nom" => $ligne['nom'], 
            "prenom" => $ligne['prenom'],
            "naissance" => $ligne['date_naissance'],
            "numero" => $ligne['numero_tel'],
            "adresse" => $ligne['adresse'],
            "mail" => $ligne['email'],
            
        );
       // echo $_SESSION["utilisateur"]["nom"];
       // var_dump($_SESSION);
        // exit();
        echo '<meta http-equiv="Refresh" content="3;url=index.php">';
    }
    else {
        echo '<meta http-equiv="Refresh" content="0;url=connexion.php">';
    }
}
  ?>
 







