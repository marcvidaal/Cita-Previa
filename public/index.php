<?php

    /* ----- DATABASE CONFIGS ----- */
    require_once "../src/config.php";


    /* ----- CONTROLLERS ----- */
    require_once "../src/2-controls/mainControl.php";
    require_once "../src/2-controls/profileControl.php";
    require_once "../src/2-controls/signinControl.php";
    require_once "../src/2-controls/signupControl.php";
    require_once "../src/2-controls/homeControl.php";
    require_once "../src/2-controls/adminResControl.php";
    require_once "../src/2-controls/adminBlockControl.php";
    require_once "../src/2-controls/adminConfigControl.php";
    require_once "../src/2-controls/createUserControl.php";
    require_once "../src/2-controls/loginTester.php";
    require_once "../src/2-controls/timeControl.php";
    require_once "../src/2-controls/showReserves.php";
    require_once "../src/2-controls/adminResControl.php";
    require_once "../src/2-controls/deleteResControl.php";
    require_once "../src/2-controls/deleteDateControl.php";
    require_once "../src/2-controls/addBlockDateControl.php";


    /* ----- MODELS ----- */
    require_once "../src/3-models/connexio.php";
    require_once "../src/3-models/usuari.php";
    require_once "../src/3-models/time.php";
    require_once "../src/3-models/admin.php";

    
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
    elseif($r === "adminPageRes"){ 
        $resposta = adminResControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "adminPageConfig"){ 
        $resposta = adminConfigControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "adminPageBlock"){ 
        $resposta = adminBlockControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "createuser"){   
        $resposta = crearUsuari($peticio,$resposta,$contenidor);
    }
    elseif($r === "timeConfigs"){ 
        $resposta = timeControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "login"){   
        $resposta = login($peticio,$resposta,$contenidor);
    }
    elseif($r === "mainPage"){   
        $resposta = mostrarReserves($peticio,$resposta,$contenidor);
    }
    elseif($r === "deleteRow"){   
        $resposta = deleteResControl($peticio,$resposta,$contenidor);
    }
    elseif($r === "deleteDate"){   
        $resposta = deleteDateControl($peticio,$resposta,$contenidor);
    }
    elseif($r === "addBlockDate"){   
        $resposta = addBlockDateControl($peticio,$resposta,$contenidor);
    }
    else {
        //$resposta = ctrlError($peticio, $resposta, $contenidor);
    }

    $resposta->resposta();
