<?php

function deleteUserControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $adminUser = $contenidor->adminUser();

    

    //CRIDEM LA FUNCIO QUE ELIMINARA L'USUARI
    $email = $peticio->get(INPUT_GET, "id");
    $adminUser->deleteUser($email);

    $resposta->redirect("location: index.php?r=adminPageUser");
    return $resposta;
}
