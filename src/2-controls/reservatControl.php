<?php

    function reservaEnviada($peticio, $resposta, $contenidor){

        $usuari=$contenidor->usuari();
        $valorCarrilHora = $peticio->get(INPUT_POST, "reserveAction");
        
        $arr1 = explode("_",$valorCarrilHora);

        $carril=$arr1[0];
        $dateTime=$arr1[1];

        $dateTimeSortida=$usuari->reservaDateTimeSortida($dateTime);
        $email = $peticio->getRaw("SESSION", "user");

        $usuari->inserirReserva($dateTime,$dateTimeSortida,$carril,$email);





        //mirar si fa falta passar a int num carril

        
        $resposta->redirect("location: index.php?r=mainPage");
        
        
        return $resposta;
    }

