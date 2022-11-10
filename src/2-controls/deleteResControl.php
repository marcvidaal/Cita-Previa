<?php

function deleteResControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();

    

    $id = $peticio->get(INPUT_GET, "id");
    $admin->deleteRes($id);

    $resposta->redirect("location: index.php?r=adminPageRes");
    return $resposta;
}
