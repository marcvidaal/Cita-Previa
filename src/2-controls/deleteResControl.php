<?php

    function deleteResControl($peticio, $resposta, $contenidor){

        $admin = $contenidor->admin();

        $id = $peticio->get(INPUT_GET,"id");        
        $admin->deleteRes($id);

        $resposta->redirect("location: index.php?r=adminPageRes");
        return $resposta;
    }