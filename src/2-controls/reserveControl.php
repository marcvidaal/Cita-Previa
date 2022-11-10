<?php

function ferReserva($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $usuari = $contenidor->usuari();

    /* ---- ACCES TO VARIABLES ----  */
    $data = $peticio->get(INPUT_POST, "data");

    /* ---- ACCES TO SESIONS ----  */
    $diesBloquejats = $usuari->getBlockedDays();
    $nomDiaSetmana = $usuari->getNomDiaData($data);
    $horariEntradaiSortida = $usuari->periodePerDia($nomDiaSetmana);
    $periodeMin = $usuari->getPeriode();
    $minutsTotals = $usuari->diferenciaMinutsEntrePeriode($nomDiaSetmana);
    $horarisOcupats = $usuari->horariOcupat();

    foreach ($diesBloquejats as $entry) {
        if ($data == $entry["dia_bloquejat"]) {
            $blockedDay = 1;
            $resposta->set("blockedDay", $blockedDay);
            $resposta->setTemplate("mainPage.php");
            return $resposta;
        }
    }

    //Creem dues variables per guardar el valor de l'entrada i la sortida del dia especificat. Hi guardem el valor recorrent l'array obtingut amb el for each
    $horariEntrada = "";
    $horariSortida = "";

    foreach ($horariEntradaiSortida as $entry) {
        $horariEntrada = $entry["horari_hora_obert"];
        $horariSortida = $entry["horari_hora_tencat"];
    }

    $periodesPossibles = $minutsTotals / $periodeMin;
    $hores = array();

    for ($i = 0; $i <= $periodesPossibles; $i++) {
        if ($i == 0) {
            array_push($hores, $horariEntrada);
        } else {
            array_push($hores, $usuari->retornaHoraAmbPeriodeAfegit(end($hores), $periodeMin));
        }
    }

    /* ---- ACCES TO VARIABLES IN VEWS ----  */
    $resposta->set("periodesPossibles", $periodesPossibles);
    $resposta->set("hores", $hores);
    $resposta->set("data", $data);
    $resposta->set("horarisOcupats", $horarisOcupats);
    $resposta->set("nomDiaSetmana", $nomDiaSetmana);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("mainPage.php");

    return $resposta;
}
