<?php

function pushReserve($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $pool = $contenidor->pool();

    /* ---- ACCES TO VARIABLES ----  */
    $lane = $peticio->get(INPUT_GET, "lane");
    $data = $peticio->get(INPUT_GET, "day");
    $start =  date("H:i:s", strtotime($peticio->get(INPUT_GET, "start")));
    $end =  date("H:i:s", strtotime($peticio->get(INPUT_GET, "end")));
    
    //$start = date("H:i:s", strtotime($start));
    $start = date('Y-m-d H:i:s', strtotime("$data $start"));
    $end = date('Y-m-d H:i:s', strtotime("$data $end"));
    
    /* ---- ACCES TO SESIONS ----  */
    $email = $peticio->getRaw("SESSION", "user");
    
    /* ---- MODEL FUNCTIONS ----  */
    $pool->pushReserve($start, $end, $lane, $email);

    /* ---- REDIRECTS ----  */
    $resposta->redirect("location: index.php?r=mainPage");
    return $resposta;
}
