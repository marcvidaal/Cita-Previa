<?php

    function adminControlBlock($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageBlock.php");
        
        return $resposta;
    }