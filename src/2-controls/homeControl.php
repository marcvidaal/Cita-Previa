<?php

function homeControl($peticio, $resposta, $contenidor)
{
    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("signInPage.php");

    return $resposta;
}
