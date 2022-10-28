<?php

    function mainController($peticio, $resposta, $contenidor){

        $resposta->setTemplate("mainPage.php");
        
        return $resposta;
    }

