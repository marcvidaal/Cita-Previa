<?php

function adminConfigControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $time = $contenidor->time();

    /* ---- MODEL FUNCTIONS ----  */
    $times = $time->pullTime();

    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("times", $times);
    
    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("adminPageConfig.php");

    return $resposta;
}
