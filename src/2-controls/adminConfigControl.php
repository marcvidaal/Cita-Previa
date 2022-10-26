<?php

    function adminConfigControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageConfig.php");
        
        return $resposta;
    }