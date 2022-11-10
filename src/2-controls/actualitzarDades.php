<?php

function actualitzarDades($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();

    /* ---- ACCES TO VARIABLES ----  */
    $name = $peticio->get(INPUT_POST, "firstName");
    $secondName = $peticio->get(INPUT_POST, "secondName");
    $password = $peticio->get(INPUT_POST, "confirm");

    /* ---- ACCES TO SESIONS ----  */
    $email = $peticio->getRaw("SESSION", "user");

    /* ---- MODEL FUNCTIONS ----  */
    $usuariDB = $usuari->comprovarCompteUsuari($email);

    if ($name != "") {$usuari->updateFirstName($email, $name);}
    if ($secondName != "") {$usuari->updateSecondName($email, $secondName);}
    if ($password != "") {$usuari->updatePassword($email, $password);}

    /* ---- REDIRECTS ----  */
    if ($usuariDB["client_admin"] == 0) {
        $resposta->redirect("location: index.php?r=mainPage");
    } else {
        $resposta->redirect("location: index.php?r=adminPageRes");
    }

    return $resposta;
}
