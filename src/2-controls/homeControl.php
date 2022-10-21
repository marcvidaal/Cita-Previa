<?php

    function ctrlHome($peticio, $resposta, $contenidor){

        $resposta->setTemplate("signInPage.php");
        
        return $resposta;
    }

