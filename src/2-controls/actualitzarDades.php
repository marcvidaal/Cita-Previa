<?php

function actualitzarDades($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();


    
    $email = $peticio->getRaw("SESSION", "user");

    $name = $peticio->get(INPUT_POST, "firstName");

    $secondName = $peticio->get(INPUT_POST, "secondName");
    $password = $peticio->get(INPUT_POST, "confirm");


    $usuariDB = $usuari->comprovarCompteUsuari($email);


    if ($name != "") {
        $usuari->updateFirstName($email, $name);
    }
    if ($secondName != "") {
        $usuari->updateSecondName($email, $secondName);
    }
    if ($password != "") {
        $usuari->updatePassword($email, $password);
    }

    if ($usuariDB["client_admin"] == 0) {
        $resposta->redirect("location: index.php?r=mainPage");
    } else {
        $resposta->redirect("location: index.php?r=adminPageRes");
    }

    return $resposta;
}
