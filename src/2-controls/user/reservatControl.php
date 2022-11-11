<?php

function reservaEnviada($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();

    /* ---- ACCES TO VARIABLES ----  */
    $valorCarrilHora = $peticio->get(INPUT_POST, "reserveAction");

    /* ---- VARIABLES ----  */
    $arr1 = explode("_", $valorCarrilHora);
    $carril = $arr1[0];
    $dateTime = $arr1[1];

    /* ---- ACCES TO SESIONS ----  */
    $email = $peticio->getRaw("SESSION", "user");

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $dateTimeSortida = $usuari->reservaDateTimeSortida($dateTime);
    
    /* ---- MODEL FUNCTIONS ----  */
    $usuari->inserirReserva($dateTime, $dateTimeSortida, $carril, $email);

    /* ---- REDIRECTS ----  */
    $resposta->redirect("location: index.php?r=mainPage");
    return $resposta;
}
