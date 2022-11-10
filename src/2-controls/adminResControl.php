<?php

function adminResControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $reserves = $admin->pullRes();

    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("reserves", $reserves);
    
    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("adminPageRes.php");

    return $resposta;
}
