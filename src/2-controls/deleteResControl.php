<?php

    function deleteResControl($peticio, $resposta, $contenidor){

        $id = $peticio->get(INPUT_GET,"id");        

        $admin = $contenidor->admin();

        $admin->deleteRes($id);
        $reserves = $admin->pullRes();

        $resposta->set("reserves", $reserves);
        $resposta->setTemplate("adminPageRes.php");
        return $resposta;
    }