<?php

function mostrarReserves($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();

    /* ---- ACCES TO SESIONS ----  */
    $email = $peticio->getRaw("SESSION", "user");

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $list = $usuari->llistarReserves($email);

    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("list", $list);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("mainPage.php");

    return $resposta;
}
