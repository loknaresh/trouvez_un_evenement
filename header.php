<?php
session_start(); 
require('bd.php');

if(!isset($page))
{
    $page="";
}	
?>

<header>
    <div class="container">
        <a href="index.php"><img src="logo2.png" alt="logo" class="logo"></a>
        <a href="index.php"><img src="logo1.png" alt="logo" class="logo1"></a>
        <nav>
        <h1 class="aceuil"> Trouvez votre événement</h1>
            <ul>
                <?php
                    

                    if (isset($_SESSION['utilisateur']))
                    {	
                        
                        echo" Bienvenue à vous  ";
                        echo " ";
                        echo $_SESSION['utilisateur']["prenom"];
                        echo " ";
                        echo $_SESSION['utilisateur']["nom"];
                        echo " ! ";
                        echo"<br>";
                        echo'<a href="deconnexion.php">Deconnexion</a>';
                        if($page!="nouveau_even")
                        {
                            echo'<li><a href="nouveau_even.php">nouveau evenement</a></li>';
                        }
                        
                    }
                    
                    else
                    {   
                        if($page!="page_inscription")
                        {
                            echo "<li><a href='page_inscription.php'> S'inscrire</a></li>";
                        }
                        if($page!="connexion")
                        {
                            echo "<li><a href='connexion.php'>Se connecter</a></li>";
                        
                            echo'<li><a href="connexion.php">Ajouter Un Evenement</a></li>';
                        }
                        
                    }
                    
                    if($page!='ndex')
                    {
                        echo '<li><a href="index.php">Recherche</a></li>';
                    }
                    if($page!="geolocalisation")
                    {
                        echo ' <li><a href="geolocalisation.php">Consulter la carte geographique</a></li>';
                    }
                ?>
                <li><a href="#">Consulter le calendrier</a></li>
                
            </ul>
        </nav>
    </div>
</header>
