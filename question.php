<?php

foreach($_POST["case"] as $latable)
{
    echo(mt_rand(1, 10).'x'.$latable."<br/>");
    /*for($valeur=0; $valeur<=10; $valeur++)
    {
        echo(mt_rand(1, 10).'x'.mt_rand(1, 10)."</br>");
    }
}    
   
/*echo mt_rand(1, 10).'x'.mt_rand(1, 10);*/
/*
if($choix == multiplication)
    {  
    $resultat = $nombre1*$nombre2;
a faire : si la saisie est égale au résultat caché, alors echo 'le résultat est bien'.$resultat;
*/

?>


          