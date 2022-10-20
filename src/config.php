<?php

    $config = [
        "db" => "cita_previa",
        "user" => "admin_cita_previa",
        "pass" => "adminCitaPrevia",
        "host" => "10.211.55.12"
    ];
    $config = array();

    /* configuració de connexió a la base dades */
    $config["db"] = array();
    $config["db"]["dbname"] = 'cita_previa';
    $config["db"]["user"] = 'admin_cita_previa';
    $config["db"]["pass"] = 'adminCitaPrevia';
    $config["db"]["host"] = '10.211.55.12';

    require_once "../src/4-validators/Peticio.php";
    require_once "../src/4-validators/Resposta.php";
    require_once "../src/4-validators/Contenidor.php";

    require_once "../src/3-models/connexio.php";