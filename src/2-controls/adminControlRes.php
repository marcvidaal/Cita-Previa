<?php

    function homeControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageRes.php");
        
        return $resposta;
    }