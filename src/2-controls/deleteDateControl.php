<?php

function deleteDateControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();

    /* ---- ACCES TO VARIABLES ----  */
    $id = $peticio->get(INPUT_GET, "id");

    /* ---- MODEL FUNCTIONS ----  */
    $admin->deleteDate($id);

    /* ---- REDIRECTS ----  */
    $resposta->redirect("location: index.php?r=adminPageBlock");
    
    return $resposta;
}
