<?php

    /* ----- DATABASE CONFIGS ----- */
    require_once "../src/config.php";


    /* ----- CONTROLERS ----- */
    require_once "../src/2-controls/adminControl.php";
    require_once "../src/2-controls/mainControl.php";
    require_once "../src/2-controls/profileControl.php";
    require_once "../src/2-controls/signinControl.php";
    require_once "../src/2-controls/signupControl.php";
    require_once "../src/2-controls/homeControl.php";
    require_once "../src/2-controls/adminControlBlock.php";
    require_once "../src/2-controls/adminControlConfig.php";
    require_once "../src/2-controls/adminControlRes.php";


    /* ----- MODELS ----- */
    require_once "../src/3-models/connexio.php";

    
    /* ----- EMESET ----- */
    require_once "../src/4-Emeset/Contenidor.php";
    require_once "../src/4-Emeset/Peticio.php";
    require_once "../src/4-Emeset/Resposta.php";

    $contenidor = new \Emeset\Contenidor($config);
    $peticio = $contenidor->peticio();
    $resposta = $contenidor->resposta();

    
    // /* ----- REQUESTER ----- */
    if(isset($_REQUEST['r'])){
        $r = $_REQUEST['r'];
    }else{
        $r = "";
    }


    // /* ----- ROUTER ----- */

    if($r == "") {
        $resposta = homeControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "signup"){ 
        $resposta = signUpPageControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "login"){   
        $resposta = logOutPageControl();
    }
    elseif($r === "mainPage"){   
        $resposta = mainPageControl();
    }
    else {
        //$resposta = ctrlError($peticio, $resposta, $contenidor);
    }

    $resposta->resposta();
