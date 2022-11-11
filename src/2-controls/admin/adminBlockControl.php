<?php

function adminBlockControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $dates = $admin->llistBlockDates();

    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("dates", $dates);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("adminPageBlock.php");

    return $resposta;
}
