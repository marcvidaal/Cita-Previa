<?php

function addBlockDateControl($peticio, $resposta, $contenidor)
{
    /* ---- ACCES TO DATABASE ----  */
    $admin = $contenidor->admin();

    /* ---- ACCES TO VARIABLES ----  */
    $day = $peticio->get(INPUT_POST, "blkDay");

    /* ---- MODEL FUNCTIONS ----  */
    $admin->addDate($day);

    /* ---- REDIRECTS ----  */
    $resposta->redirect("location: index.php?r=adminPageBlock");

    return $resposta;
}