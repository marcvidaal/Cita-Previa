<?php

function loadMainTableControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO MODELS ----  */
    $pool = $contenidor->pool();
    $admin = $contenidor->admin();

    /* ---- ACCES TO VARIABLES ----  */
    $selectedData = $peticio->get(INPUT_POST, "data");

    /* ---------------------------------------------------------------------- */
    //SELECCIONEM EL DIA QUE VOLEM TRACTAR (if null = curdate)
    $data = isset($selectedData) ? $selectedData : date('d-m-Y');
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
    $closed = "";
    foreach ($day as $contriner => $variable) {
        if ($variable["horari_tencat"] == 1) {
            $weekdayClosed = true;
        }
        //DONEM VALOR A LA DATA DE OBERTUA I TENCAMENT
        $open = date("H:i", strtotime($variable["horari_hora_obert"]));
        $close = date("H:i", strtotime($variable["horari_hora_tencat"]));
    }

    /* ---------------------------------------------------------------------- */
    //COMPROBEM SI PODEM O NO IMPRIMIR
    $print = true;
    if (!$blockedDay) {
        if (!$weekdayClosed) {
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
                if (date('d-m-Y',strtotime($value["reserva_data_entrada"])) == $data) {
                    $key = array($value["carril_numero"], date('H:i',strtotime($value["reserva_data_entrada"])));
                    array_push($occupied, $key);
                }
            }
            
            /* ---- ACCES TO VARIABLES IN VEWS ----  */
            $resposta->set("occupied", $occupied);
            $resposta->set("weekday", $weekday);
            $resposta->set("lanes", $lanes);
            $resposta->set("timetable", $timetable);
        } else {
            $print = false;
        }
    } else {
        $print = false;
    }
    /* ---------------------------------------------------------------------- */


    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("print", $print);
    $resposta->set("closed", $closed);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("mainPage.php");
    //$resposta->redirect("location: index.php?r=mainPage");
    return $resposta;
}
