<?php

    function adminConfigControl($peticio, $resposta, $contenidor){

        $time = $contenidor->time();
        $times = $time->pullTime();
        
        $resposta->set("times", $times);
        $resposta->setTemplate("adminPageConfig.php");
        
        return $resposta;
    }