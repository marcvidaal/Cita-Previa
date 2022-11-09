<?php

    function deleteDateControl($peticio, $resposta, $contenidor){

        $admin = $contenidor->admin();

        $id = $peticio->get(INPUT_GET,"id");        
        $admin->deleteDate($id);

        $resposta->redirect("location: index.php?r=adminPageBlock");
        return $resposta;
    }