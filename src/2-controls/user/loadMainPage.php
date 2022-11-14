<?php

function loadMainPageControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO MODEL ----  */
    $admin = $contenidor->admin();

    /* ---- ACCES TO SESIONS ----  */
    $email = $peticio->getRaw("SESSION", "user");

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $reserves = $admin->pullRes();

    /* ---- FUNCTIONS ----  */
    $userRes = array();
    // Enviem al model totes les reserves que te el usuari que ha iniciat sessio dins de l'array $userRes[]
    foreach ($reserves as $reserva) {
        if ($reserva["reserva_client_email"] == $email) {
            $userRes[] = $reserva;
        }
    }

    /* ---- ACCES TO MODELS ----  */
    $pool = $contenidor->pool();
    $admin = $contenidor->admin();

    /* ---- ACCES TO VARIABLES ----  */
    $selectedData = $peticio->get(INPUT_POST, "data");

    /* ---------------------------------------------------------------------- */
    //SELECCIONEM EL DIA QUE VOLEM TRACTAR (if null = curdate)
    $data = isset($selectedData) ? $selectedData : date('Y-m-d');
    $weekday = date('l', strtotime($data));
    /* ---------------------------------------------------------------------- */

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $blokedDates = $pool->getBlockedDays();
    $day = $pool->getDay($weekday);
    $period = $pool->getPeriode();
    $lanes = $pool->getlanes();
    $reserves = $admin->pullRes();

    /* ---------------------------------------------------------------------- */
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

    //COMPROVEM SI EL DIA ESTA OBERT
    $weekdayClosed = false;
    $open = "";
    foreach ($day as $contriner => $variable) {
        if ($variable["horari_tencat"] == 1) {
            $weekdayClosed = true;
            $closed = "dateClosed";
        }
        //DONEM VALOR A LA DATA DE OBERTUA I TENCAMENT
        $open = date("H:i", strtotime($variable["horari_hora_obert"]));
        $close = date("H:i", strtotime($variable["horari_hora_tencat"]));
    }

    /* ---------------------------------------------------------------------- */
    //OBTENIM ELS PERIODES DE RESERVES
    $periode = date("i", strtotime($period));

    //TRACTEM LES DADES
    $totalPeriods = intdiv(((intval(date("H", strtotime($close))) * 60) + intval(date("i", strtotime($close)))) - ((intval(date("H", strtotime($open))) * 60) + intval(date("i", strtotime($open)))), $periode);

    // EXTREM EL HORARI DEL DIA
    $timetable = array();
    $o = $open;
    //PER A CADA PERIODE CALULAT
    for ($i = 0; $i < $totalPeriods; $i++) {
        $key = $o . " to " . date("H:i", strtotime($o . '+' . $periode . ' minutes'));
        array_push($timetable, $key);
        $o = date("H:i", strtotime($o . '+' . $periode . ' minutes'));
    }

    //GUARDEM LES RESERVES QUE ESTIGUIN GUARDADES DINS EL MATEIX DIA
    $occupied = array();
    foreach ($reserves as $key => $value) {
        if (date('Y-m-d', strtotime($value["reserva_data_entrada"])) == $data) {
            $key = array($value["carril_numero"], date('H:i', strtotime($value["reserva_data_entrada"])));
            array_push($occupied, $key);
        }
    }
    
    //COMPROBEM SI PODEM O NO IMPRIMIR
    $print = true;
    if (!$blockedDay) {
        if (!$weekdayClosed) {
        } else {
            $print = false;
        }
    } else {
        $print = false;
    }
    /* ---------------------------------------------------------------------- */
    
    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("occupied", $occupied);
    $resposta->set("weekday", $weekday);
    $resposta->set("data", $data);
    $resposta->set("lanes", $lanes);
    $resposta->set("timetable", $timetable);
    $resposta->set("email", $email);
    $resposta->set("print", $print);
    $resposta->set("closed", $closed);

    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $resposta->set("list", $userRes);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("mainPage.php");
    return $resposta;
}
