<?php

    function isAuth($peticio, $resposta, $contenidor, $next){

        $logat = $peticio->get("SESSION", "logat");

        if($logat) {
            $resposta = $next($peticio, $resposta, $contenidor);
        } else {
            $resposta->redirect("location: index.php");
        }
        // Do something after the next middleware or controller

        return $resposta;

    }