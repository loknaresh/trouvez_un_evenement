<?php

    if(!isset($page))
    {
        $page="";
    }	
?>
<div class="footer-dark">	
    <footer>
        <?php
            if($page!="presentation")
            {
                echo '<div class="bloc">';
                    echo '<h3>En savoir +</h3>';
                    echo '<ul>';
                        echo '<li><a href="presentation.php">Qui sommes nous</a></li>';
                    echo '</ul>';
                echo '</div>';
            }
            if($page!="contacter")
            {
                echo '<div class="bloc">';
                    echo '<h3>Contact</h3>';
                    echo '<ul>';
                        echo '<li><a href="contacter.php">Nous Contacter</a></li>';
                    echo '</ul>';
                echo '</div>';
            }
        ?>

    </footer>
</div>
 