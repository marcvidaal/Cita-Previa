<?php

function toggleAdminControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $adminUser = $contenidor->adminUser();

    /* ---- ACCES TO VARIABLES ----  */
    $id = $peticio->get(INPUT_GET, "id");
    $admin = $peticio->get(INPUT_GET, "admin");

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    if ($admin == 1) {
        $admin = 0;
        $adminUser->toggleAdmin($id, $admin);
    } elseif ($admin == 0) {
        $admin = 1;
        $adminUser->toggleAdmin($id, $admin);
    }

    /* ---- REDIRECTS ----  */
    $resposta->redirect("location: index.php?r=adminPageUser");

    return $resposta;
}
