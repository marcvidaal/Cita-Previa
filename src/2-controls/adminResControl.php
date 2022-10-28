<?php

    function adminResControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageRes.php");
        
        return $resposta;
    }