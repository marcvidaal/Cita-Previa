<?php

    function homeControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageConfig.php");
        
        return $resposta;
    }