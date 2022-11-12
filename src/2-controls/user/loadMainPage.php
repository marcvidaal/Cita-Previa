<?php

function loadMainPage($peticio, $resposta, $contenidor)
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
    foreach($reserves as $reserva){
        if($reserva["reserva_client_email"] == $email){
            $userRes[] = $reserva;
        }
    }
    
    /* ---- MODEL FUNCTIONS VARIABLES ----  */
    $resposta->set("list", $userRes);

    /* ---- REDIRECTS ----  */
    $resposta->setTemplate("mainPage.php");
    return $resposta;
}
