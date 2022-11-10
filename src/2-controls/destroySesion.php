<?php

function destroySession($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO SESIONS ----  */
    $resposta->setSession("logat", false);
    $resposta->setSession("user", null);

    /* ---- REDIRECTS ----  */
    $resposta->redirect("location: index.php");

    return $resposta;
}
