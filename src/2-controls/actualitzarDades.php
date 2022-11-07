<?php

    function actualitzarDades($peticio, $resposta, $contenidor){

        $usuari = $contenidor->usuari();

        $email = $peticio->getRaw("SESSION", "user");

        $name = $peticio->get(INPUT_POST, "firstName");
        
        $secondName = $peticio->get(INPUT_POST, "secondName");
        $password = $peticio->get(INPUT_POST, "confirm");
        


        if ($name!="") {
            $usuari->updateFirstName($email,$name);
        }
        if ($secondName!="") {
            $usuari->updateSecondName($email,$secondName);
        }
        if ($password!="") {
            $usuari->updatePassword($email,$password);
        }

        // var_dump($usuari->provaa($email));
        // die();




       $resposta->redirect("location: index.php?r=mainPage");
        
        return $resposta;
    }

