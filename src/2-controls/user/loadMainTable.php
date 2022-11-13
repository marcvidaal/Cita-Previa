<?php

function loadMainTableControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO MODELS ----  */
    $pool = $contenidor->pool();
    $admin = $contenidor->admin();

    /* ---- ACCES TO VARIABLES ----  */
    $selectedData = $peticio->get(INPUT_POST, "data");

    /* ---- FUNCTIONS ----  */
    //SELECCIONEM EL DIA QUE VOLEM TRACTAR (if null = curdate)
    $data = isset($selectedData) ? $selectedData : date('d-m-Y');
    $weekday = date('l' , strtotime($data));

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $blokedDates = $pool->getBlockedDays();
    $day = $pool->getDay($weekday);
    $period = $pool->getPeriode();
    $reserves = $admin->pullRes();

    //DELCAREM EL SELECTOR DE CLOSED
    $closed = "";

    //COMPROVEM SI EL DIA ESTA BLOQUEJAT
    $blockedDay = false;
    foreach ($blokedDates as $entry) {
        if ($data == $entry["dia_bloquejat"]) {
            $blockedDay = true;
            $closed = "dateBloked";
        }
    }

    //COMPROVEM SI EL DIA ESTA OBERT I EXTREM EL HORARI DEL DIA
    $weekdayClosed = false;
    $open = "";
    $close = "";
    foreach ($day as $contriner => $variable) {
        if ($variable["horari_tencat"] == 1) {
            $weekdayClosed = true;
        }
        $open = date("H:i",strtotime($variable["horari_hora_obert"]));
        $close = date("H:i",strtotime($variable["horari_hora_tencat"]));
    }

    //OBTENIM ELS PERIODES DE RESERVES
    $periode = intval(date("i",strtotime($period)));

    //TRACTEM LES DADES
    $totalPeriods = intdiv(((intval(date("H",strtotime($close))) * 60) + intval(date("i",strtotime($close)))) - ((intval(date("H",strtotime($open))) * 60) + intval(date("i",strtotime($open)))), $periode);
   

    if (!$blockedDay) {
        $print = true;
        if (!$weekdayClosed) {
            # code...
        }
    }
    else{
        $print = false;
    }

    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("print", $print);
    $resposta->set("closed", $closed);
    $resposta->set("weekday", $weekday);
    $resposta->set("totalPeriods", $totalPeriods);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("mainPage.php");
    //$resposta->redirect("location: index.php?r=mainPage");
    return $resposta;
}
