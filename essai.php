<?php

foreach($_POST["case"] as $latable)
{
    echo(mt_rand(1, 10).'x'.$latable."<br/>");
    
?>
