<?php

    function addBlockDateControl($peticio, $resposta, $contenidor){

        $admin = $contenidor->admin();

        $day = $peticio->get(INPUT_POST,"blkDay");        
        $admin->addDate($day);

        $resposta->redirect("location: index.php?r=adminPageBlock");
        return $resposta;
    }