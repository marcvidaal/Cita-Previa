<?php

    function adminBlockControl($peticio, $resposta, $contenidor){

        $admin = $contenidor->admin();
        $dates = $admin->llistBlockDates();
        
        $resposta->set("dates", $dates);
        $resposta->setTemplate("adminPageBlock.php");
        
        return $resposta;
    }