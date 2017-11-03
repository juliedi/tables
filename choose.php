<?php

$tables = $_POST["tables"];

function Multiplier($facteur){
    $nb = 0;

    while ($nb < 11){
        echo ($facteur."x".$nb."=".$facteur*$nb."</br>");
        $nb++;
    }
}
Multiplier($tables);

?>