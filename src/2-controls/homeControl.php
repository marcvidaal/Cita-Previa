<?php

    function ctrlHome($peticio, $resposta, $contenidor){

        $resposta->setTemplate("signUpPage.php");
        
        return $resposta;
    }