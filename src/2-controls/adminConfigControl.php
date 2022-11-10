<?php

function adminConfigControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $time = $contenidor->time();

    
    $times = $time->pullTime();

    $resposta->set("times", $times);
    $resposta->setTemplate("adminPageConfig.php");

    return $resposta;
}
