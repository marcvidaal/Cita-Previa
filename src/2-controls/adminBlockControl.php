<?php

function adminBlockControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();


    
    $dates = $admin->llistBlockDates();

    $resposta->set("dates", $dates);
    $resposta->setTemplate("adminPageBlock.php");

    return $resposta;
}
