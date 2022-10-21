<?php

    /* ----- DATABASE CONFIGS ----- */
    require_once "../src/config.php";


    /* ----- CONTROLERS ----- */
    require_once "../src/2-controls/adminControl.php";
    require_once "../src/2-controls/mainControl.php";
    require_once "../src/2-controls/profileControl.php";
    require_once "../src/2-controls/signinControl.php";
    require_once "../src/2-controls/signupControl.php";


    /* ----- MODELS ----- */
    require_once "../src/3-models/connexio.php";

    
    /* ----- EMESET ----- */
    $contenidor = new \Emeset\Contenidor($config);

    // $peticio = $contenidor->peticio();
    // $resposta = $contenidor->resposta();

    
    // /* ----- REQUESTER ----- */
    // $r = $_REQUEST['r'];

    if($r == "") {
        $resposta = homeControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "signUp"){   
        $resposta = signUpPageControler();
    }
    elseif($r === "logOut"){   
        $resposta = logOutPageControler();
    }
    elseif($r === "mainPage"){   
        $resposta = mainPageControler();
    }
