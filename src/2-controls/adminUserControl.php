<?php

    function adminUserControl($peticio, $resposta, $contenidor){

        $adminUser = $contenidor->adminUser();
        $users = $adminUser->pullUsers();
        
        $resposta->set("users", $users);
        $resposta->setTemplate("adminPageUser.php");
        
        return $resposta;
    }