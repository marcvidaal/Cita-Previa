<?php

function adminUserControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $adminUser = $contenidor->adminUser();

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $users = $adminUser->pullUsers();

    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("users", $users);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("adminPageUser.php");

    return $resposta;
}
