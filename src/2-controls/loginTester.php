<?php

function login($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();


    

    $email = $peticio->get(INPUT_POST, "correuID");
    $contrasenya = $peticio->get(INPUT_POST, "contrasenyaSignIn");

    // Guardem usuari i contrassenya
    $usuariDB = $usuari->comprovarCompteUsuari($email);
    // Guardem nomes el usuari
    $user = $usuari->comprovarExistenciaUsuari($email);

    /* ----- SI L'USUARI NO EXISTEIX A LA BASSE DE DADES----- */
    if ($usuariDB === false) {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php");
    } else {
        /* ----- SI L'USUARI EXITEIX A LA BASSE DE DADES I LA CONTRASSENYA ES LA CORRECTE ----- */
        if ($contrasenya === $usuariDB["client_password"]) {
            $resposta->setSession("logat", true);
            $resposta->setSession("user", $user);
            if ($usuariDB["client_admin"] == 0) {
                $resposta->redirect("location: index.php?r=mainPage");
            } else {
                $resposta->redirect("location: index.php?r=adminPageRes");
            }
        }
        /* ----- SI L'USUARI EXITEIX A LA BASSE DE DADES I LA CONTRASSENYA ES LA INCORRECTE ----- */ else {
            $resposta->setSession("logat", false);
            $resposta->redirect("location: index.php");
        }
    }

    return $resposta;
}
