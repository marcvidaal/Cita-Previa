<?php

function crearUsuari($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();

    /* ---- ACCES TO VARIABLES ----  */
    $email = $peticio->get(INPUT_POST, "email");
    $nom = $peticio->get(INPUT_POST, "firstName");
    $cognoms = $peticio->get(INPUT_POST, "secondName");
    $contrasenya = $peticio->get(INPUT_POST, "password");

    /* ---- MODEL FUNCTIONS & REDIRECTS----  */
    if ($usuari->comprovarExistenciaUsuari($email) === false) {
        $usuari->inserirUsuari($email, $nom, $cognoms, $contrasenya);
        $resposta->redirect("location: index.php");
    } else {
        $resposta->redirect("location: index.php?r=signup");
    }

    $resposta->redirect("location: index.php");

    return $resposta;
}
