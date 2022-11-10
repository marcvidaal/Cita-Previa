<?php

function deleteUserResControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $adminUser = $contenidor->adminUser();

    /* ---- ACCES TO VARIABLES ----  */
    $email = $peticio->get(INPUT_GET, "id");

    /* ---- MODEL FUNCTIONS ----  */
    $adminUser->deleteUserRes($email);

    /* ---- REDIRECTS ----  */
    $resposta->redirect("location: index.php?r=adminPageUser");
    
    return $resposta;
}
