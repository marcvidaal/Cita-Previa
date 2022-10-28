<?php

/**
 * Middleware que controla si l'usuari està identificat.
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 **/

/**
 * middleAdmin: Middleware que controla si l'usuari està identificat.
 *
 * @param $peticio  contingut de la petició
 *                  http.
 * @param $resposta contingut de la resposta http.
 * @param $next     controlador que s'ha d'executar si l'usuari està
 *                  identificat.
 **/
function middleware($peticio, $resposta, $contenidor, $controlador)
{
    $email = $peticio->get("SESSION", "correuID");
    $password = $peticio->get("SESSION", "contrasenyaSignIn");

    /* Validem que nom i cognom estan definits */
    if ($email == "" || $password == "") {
        $resposta->setSession("error", "You are not logged in!\n");
        $resposta->redirect("Location:index.php?r=login");
    } else {
        $resposta = $controlador($peticio, $resposta, $contenidor);
    }


    return $resposta;
}