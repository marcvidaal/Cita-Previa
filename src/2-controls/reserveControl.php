<?php

function ferReserva($peticio, $resposta, $contenidor){

    $usuari = $contenidor->usuari();

    //obtenim data introduïda per fer la reserva
    $data = $peticio->get(INPUT_POST, "data");



    //Array que retorna els dies bloquejats  retorna totes les dates bloquejades
    $diesBloquejats= $usuari->getBlockedDays();


    foreach($diesBloquejats as $entry) {
        if($data == $entry["dia_bloquejat"]){
            var_dump('this day is not available');
            die();
        }
        
    }

    //Nom dia de la setmana escollit exemple : 2002-04-7 retorna dijous
    $nomDiaSetmana=$usuari->getNomDiaData($data);

    //Obtenim un array amb la hora entrada i sortida segons el dia especificat
    $horariEntradaiSortida= $usuari->periodePerDia($nomDiaSetmana);


    //Creem dues variables per guardar el valor de l'entrada i la sortida del dia especificat. Hi guardem el valor recorrent l'array obtingut amb el for each
    $horariEntrada = "";
    $horarisortida = "";

    foreach($horariEntradaiSortida as $entry) {
        $horariEntrada = $entry["horari_hora_obert"];
        $horariSortida = $entry["horari_hora_tencat"];  
    }
    

    //Retorna nombre de minuts del periode introduït de la piscina retorna en minuts els periode definit per admin. Ex 30 min per reserva
    $periodeMin = $usuari->getPeriode();

    
    //Obtenim els minuts totals entre l'interval del dia. Exemple: 8:00 a 9:00 son 60 min
    $minutsTotals=$usuari->diferenciaMinutsEntrePeriode($nomDiaSetmana);

    //Dividim els minuts totals 
    $periodesPossibles=$minutsTotals/$periodeMin;
    

    
    /*
        hi ha dos maneres de ferho. La anterior amb periodesPossibles o amb un while i anant afegint el periode necessari a la hora inici
        pero si no coincideix mai el periode final sempre s'executara.
    */


    $resposta->set("peridesPossibles", $periodesPossibles);

    $email = $peticio->getRaw("SESSION", "user");

    

    $resposta->setTemplate("mainPage.php");

    return $resposta;
}