<?php

    function addBlockDateControl($peticio, $resposta, $contenidor){

        $day = $peticio->get(INPUT_POST,"blkDay");        

        $admin = $contenidor->admin();

        $admin->addDate($day);
        $dates = $admin->llistBlockDates();

        $resposta->set("dates", $dates);
        $resposta->setTemplate("adminPageBlock.php");
        return $resposta;
    }