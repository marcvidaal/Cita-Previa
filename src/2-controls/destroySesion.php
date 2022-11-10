<?php

function destroySession($peticio, $resposta, $contenidor)
{

    $resposta->setSession("logat", false);
    $resposta->setSession("user", null);
    $resposta->redirect("location: index.php");

    return $resposta;
}
