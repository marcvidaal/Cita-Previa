<?php

    function login($peticio,$resposta,$contenidor)
    {
        $usuari = $contenidor->usuari();
        $email = $peticio->get(INPUT_POST, "correuID");
        $contrasenya = $peticio->get(INPUT_POST, "contrasenyaSignIn"); 

        

        if($usuari->comprovarCompteUsuari($email, $contrasenya)===false){
            $resposta->setSession("logat", false);
            $resposta->redirect("location: index.php"); 

        }
        else{
            $resposta->setSession("logat", true);
            $resposta->setSession("user", $email);
            $resposta->redirect("location: index.php?r=mainPage");
        }


        return $resposta;

    }

