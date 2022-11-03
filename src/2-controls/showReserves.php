<?php

function mostrarReserves($peticio, $resposta, $contenidor){

    $usuari = $contenidor->usuari();

    $email = $peticio->getRaw("SESSION", "user");

    // print_r($user);

    // print_r($_SESSION);
    // die($user["id"]);

    $list = $usuari->llistarReserves($email);

    $resposta->set("list", $list);

    $resposta->setTemplate("mainPage.php");

    

    return $resposta;
}