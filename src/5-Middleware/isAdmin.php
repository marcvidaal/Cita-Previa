<?php

    function isAdmin($peticio, $resposta, $contenidor, $next){

        $logat = $peticio->get("SESSION", "logat");

        if($logat) {
            $usuari = $contenidor->usuari();

            $email = $peticio->getRaw("SESSION", "user");

            $userDB = $usuari->getUser($email);

            if($userDB["client_admin"] == 1){
                $resposta = $next($peticio, $resposta, $contenidor);
            }
            else{
                $resposta->redirect("location: index.php?r=destroySession");
            }        
        } 
        else {
            $resposta->redirect("location: index.php");
        }

        return $resposta;
    }