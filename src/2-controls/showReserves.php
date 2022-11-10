<?php

function mostrarReserves($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();




    $email = $peticio->getRaw("SESSION", "user");

    $list = $usuari->llistarReserves($email);

    $resposta->set("list", $list);

    $resposta->setTemplate("mainPage.php");

    return $resposta;
}
