<?php

function mainController($peticio, $resposta, $contenidor)
{
    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("mainPage.php");

    return $resposta;
}
