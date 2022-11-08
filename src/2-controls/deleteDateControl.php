<?php

    function deleteDateControl($peticio, $resposta, $contenidor){

        $id = $peticio->get(INPUT_GET,"id");        

        $admin = $contenidor->admin();

        $admin->deleteDate($id);
        $dates = $admin->llistBlockDates();

        $resposta->set("dates", $dates);
        $resposta->setTemplate("adminPageBlock.php");
        return $resposta;
    }