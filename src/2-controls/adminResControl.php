<?php

function adminResControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();


    
    $reserves = $admin->pullRes();

    $resposta->set("reserves", $reserves);
    $resposta->setTemplate("adminPageRes.php");

    return $resposta;
}
