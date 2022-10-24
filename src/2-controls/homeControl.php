<?php

    function homeControl($peticio, $resposta, $contenidor){

        $resposta->setTemplate("signInPage.php");
        
        return $resposta;
    }

