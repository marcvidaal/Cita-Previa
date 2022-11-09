<?php

    function toggleAdminControl($peticio, $resposta, $contenidor){

        $adminUser = $contenidor->adminUser();

        //RECUPEREM EL USUARI I SI ES O NO ADMIN
        $id = $peticio->get(INPUT_GET,"id");        
        $admin = $peticio->get(INPUT_GET,"admin");        

        //FEM LA FUNCIO TOGGLE ADMIN
        if ($admin == 1) {
            $admin = 0;
            $adminUser->toggleAdmin($id,$admin);
        }
        elseif($admin == 0){
            $admin = 1;
            $adminUser->toggleAdmin($id,$admin);
        }

        $resposta->redirect("location: index.php?r=adminPageUser");
        
        return $resposta;
    }