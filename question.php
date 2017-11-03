<?php 
$reponse = $_post("multiplication");
$joueur= $_post("answer");
    if($reponse==$joueur) 
    {
        echo "Bravo! C'est la bonne réponse!";
    }
    else
    
        echo "Tu y es presque, essaye encore!";
?>