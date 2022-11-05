<?php

function mostrarReserves($peticio, $resposta, $contenidor){

    $usuari = $contenidor->usuari();

    $email = $peticio->getRaw("SESSION", "user");

    $list = $usuari->llistarReserves($email);

    $resposta->set("list", $list);

    $resposta->setTemplate("mainPage.php");

    return $resposta;
}