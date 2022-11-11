<?php

function signInPageControl($peticio, $resposta, $contenidor)
{
    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("signInPage.php");

    return $resposta;
}
