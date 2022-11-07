<?php

    function adminResControl($peticio, $resposta, $contenidor){

        $admin = $contenidor->admin();
        $reserves = $admin->pullRes();
        
        $resposta->set("reserves", $reserves);
        $resposta->setTemplate("adminPageRes.php");
        
        return $resposta;
    }