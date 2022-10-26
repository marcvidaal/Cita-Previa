<?php

    function adminControlRes($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageRes.php");
        
        return $resposta;
    }