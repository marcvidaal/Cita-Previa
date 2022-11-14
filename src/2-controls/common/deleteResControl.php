<?php

function deleteResControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();

    /* ---- ACCES TO VARIABLES ----  */
    $id = $peticio->get(INPUT_GET, "id");

    /* ---- MODEL FUNCTIONS ----  */
    $admin->deleteRes($id);

    /* ---- REDIRECTS ----  */
    $usuari = $contenidor->usuari();

    $email = $peticio->getRaw("SESSION", "user");

    $userDB = $usuari->getUser($email);

    if ($userDB["client_admin"] == 1) {
        $resposta->redirect("location: index.php?r=adminPageRes");
    } else {
        $resposta->redirect("location: index.php?r=mainPage");
    }

    return $resposta;
}
