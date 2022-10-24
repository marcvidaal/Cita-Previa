<?php

    function adminPageResControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageReserves.php");
        
        return $resposta;
    }