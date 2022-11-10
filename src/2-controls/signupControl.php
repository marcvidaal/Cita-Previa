<?php

function signUpPageControl($peticio, $resposta, $contenidor)
{
    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("signUpPage.php");

    return $resposta;
}
