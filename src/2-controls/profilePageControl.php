<?php

function profilePageControl($peticio, $resposta, $contenidor)
{
    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("profilePage.php");

    return $resposta;
}
