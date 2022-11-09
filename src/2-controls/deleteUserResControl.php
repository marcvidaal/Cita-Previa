<?php

    function deleteUserResControl($peticio, $resposta, $contenidor){

        $adminUser = $contenidor->adminUser();

        //CRIDEM LA FUNCIO QUE ELIMINARA L'USUARI
        $email = $peticio->get(INPUT_GET,"id"); 
        $adminUser->deleteUserRes($email);

        $resposta->redirect("location: index.php?r=adminPageUser");
        return $resposta;
    }