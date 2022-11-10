<?php

function timeControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $time = $contenidor->time();


    

    /* ---- DAYS ---- */
    $weekdays = array(
        /* ---- MONDAY EDIT ---- */
        "dilluns" => $monday = array(
            "start" =>  $peticio->get(INPUT_POST, "startMonday"),
            "end" =>  $peticio->get(INPUT_POST, "endMonday"),
            "closed" =>  $peticio->get(INPUT_POST, "closedMonday")
        ),
        /* ---- TUESDAY EDIT ---- */
        "dimarts" => $tuesday = array(
            "start" =>  $peticio->get(INPUT_POST, "startTuesday"),
            "end" =>  $peticio->get(INPUT_POST, "endTuesday"),
            "closed" =>  $peticio->get(INPUT_POST, "closedTuesday")
        ),
        /* ---- WEDNESDAY EDIT ---- */
        "dimecres" => $wednesday = array(
            "start" =>  $peticio->get(INPUT_POST, "startWednesday"),
            "end" =>  $peticio->get(INPUT_POST, "endWednesday"),
            "closed" =>  $peticio->get(INPUT_POST, "closedWednesday")
        ),
        /* ---- THURSDAY EDIT ---- */
        "dijous" => $thursday = array(
            "start" =>  $peticio->get(INPUT_POST, "startThursday"),
            "end" =>  $peticio->get(INPUT_POST, "endThursday"),
            "closed" =>  $peticio->get(INPUT_POST, "closedThursday")
        ),
        /* ---- FRIDAY EDIT ---- */
        "divendres" => $friday = array(
            "start" =>  $peticio->get(INPUT_POST, "startFriday"),
            "end" =>  $peticio->get(INPUT_POST, "endFriday"),
            "closed" =>  $peticio->get(INPUT_POST, "closedFriday")
        ),
        /* ---- SATURDAY EDIT ---- */
        "dissabte" => $saturday = array(
            "start" =>  $peticio->get(INPUT_POST, "startSaturday"),
            "end" =>  $peticio->get(INPUT_POST, "endSaturday"),
            "closed" =>  $peticio->get(INPUT_POST, "closedSaturday")
        ),
        /* ---- SUNDAY EDIT ---- */
        "diumenge" => $sunday = array(
            "start" =>  $peticio->get(INPUT_POST, "startSunday"),
            "end" =>  $peticio->get(INPUT_POST, "endSunday"),
            "closed" =>  $peticio->get(INPUT_POST, "closedSunday")
        )
    );

    $time->updateTime($weekdays);
    $resposta->redirect("location: index.php?r=adminPageConfig");


    return $resposta;
}
