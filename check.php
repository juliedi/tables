<?php
    foreach($_POST["case"] as $latable)
        for($valeur=0; $valeur<=10; $valeur++)
        {
            echo($valeur."*".$latable."=".$valeur*$latable."</br>");
            if($valeur==10)
                echo("</br>");
        }
?>
        

