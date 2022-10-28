<?php

    function adminBlockControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("adminPageBlock.php");
        
        return $resposta;
    }