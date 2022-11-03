<?php

    function deleteControl($peticio, $resposta, $contenidor){

        $id = $peticio->get(INPUT_GET,"id");        

        $adminRes = $contenidor->adminRes();

        $adminRes->deleteRes($id);
        $reserves = $adminRes->pullRes();

        $resposta->set("reserves", $reserves);
        $resposta->setTemplate("adminPageRes.php");
        return $resposta;
    }