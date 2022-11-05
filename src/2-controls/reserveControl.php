<?php

function ferReserva($peticio, $resposta, $contenidor){

    $usuari = $contenidor->usuari();

    //obtenim data introduïda per fer la reserva
    $data = $peticio->get(INPUT_POST, "data");

    //Nom dia de la setmana escollit exemple : 2002-04-7 retorna dijous
    $nomDiaSetmana=$usuari->getNomDiaData($data);

    
    

    //Obtenim un array amb la hora entrada i sortida segons el dia especificat
    $horariEntradaiSortida= $usuari->periodePerDia($nomDiaSetmana);


    //Creem dues variables per guardar el valor de l'entrada i la sortida del dia especificat. Hi guardem e valor recorrent l'array obtingut amb el for each
    $horariEntrada = "";
    $horarisortida = "";

    foreach($horariEntradaiSortida as $entry) {
        $horariEntrada = $entry["horari_hora_obert"];
        $horariSortida = $entry["horari_hora_tencat"];  
    }
    

    //Retorna nombre de minuts del periode introduït de la piscina retorna en minuts els periode definit per admin. Ex 30 min per reserva
    $periodeMin = $usuari->getPeriode();

    //Array que retorna els dies bloquejats  retorna totes les dates bloquejades
    $diesBloquejats= $usuari->getBlockedDays();
    


    $email = $peticio->getRaw("SESSION", "user");

    
    
    



    $resposta->set("list", $list);

    $resposta->setTemplate("mainPage.php");

    return $resposta;
}