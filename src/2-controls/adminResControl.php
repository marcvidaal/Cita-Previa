<?php

    function adminResControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageReserves.php");
        
        return $resposta;
    }