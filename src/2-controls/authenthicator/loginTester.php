<?php

function login($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();

    /* ---- ACCES TO VARIABLES ----  */
    $email = $peticio->get(INPUT_POST, "correuID");
    $contrasenya = $peticio->get(INPUT_POST, "contrasenyaSignIn");

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $usuariDB = $usuari->getUser($email);
    $user = $usuari->comprovarExistenciaUsuari($email);

    /* ---- FUNCTION ----  */
    // SI L'USUARI NO EXISTEIX A LA BASSE DE DADES
    if ($usuariDB === false) {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php");
    } else {
        //SI L'USUARI EXITEIX A LA BASSE DE DADES I LA CONTRASSENYA ES CORRECTE
        if ($contrasenya === $usuariDB["client_password"]) {

            /* ---- MODEL FUNCTIONS VARIABLES ----  */
            $resposta->setSession("logat", true);
            $resposta->setSession("user", $user);
            //SI ES ADNIM REDIRIGIM AUN LLOC O A UN ALTRE
            if ($usuariDB["client_admin"] == 0) {
                $resposta->redirect("location: index.php?r=mainPage");
            } else {
                $resposta->redirect("location: index.php?r=adminPageRes");
            }
        }
        //SI L'USUARI EXISTEIX A LA BASE DE DADES I LA CONTRASSENYA ES INCORRECTE
        else {
            $resposta->setSession("logat", false);
            $resposta->redirect("location: index.php");
        }
    }

    return $resposta;
}
