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
    $resposta->redirect("location: index.php?r=adminPageRes");

    return $resposta;
}
