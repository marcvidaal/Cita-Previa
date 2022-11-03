<?php

    function adminResControl($peticio, $resposta, $contenidor){

        $adminRes = $contenidor->adminRes();
        $reserves = $adminRes->pullRes();
        
        $resposta->set("reserves", $reserves);
        $resposta->setTemplate("adminPageRes.php");
        return $resposta;
    }