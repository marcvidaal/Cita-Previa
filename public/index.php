<?php

    /* ----- DATABASE CONFIGS ----- */
    require_once "../src/config.php";


    /* ----- CONTROLLERS ----- */
    require_once "../src/2-controls/mainControl.php";
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
    require_once "../src/2-controls/reserveControl.php";
    require_once "../src/2-controls/profilePageControl.php";
    require_once "../src/2-controls/actualitzarDades.php";
    require_once "../src/2-controls/adminResControl.php";
    require_once "../src/2-controls/deleteResControl.php";
    require_once "../src/2-controls/deleteDateControl.php";
    require_once "../src/2-controls/addBlockDateControl.php";
    require_once "../src/2-controls/destroySesion.php";
    require_once "../src/2-controls/reservatControl.php";

    /* ----- CONTROLERS ----- */
    require_once "../src/3-models/connexio.php";
    require_once "../src/3-models/usuari.php";
    require_once "../src/3-models/time.php";
    require_once "../src/3-models/admin.php";

    
    /* ----- EMESET ----- */
    require_once "../src/4-Emeset/Contenidor.php";
    require_once "../src/4-Emeset/Peticio.php";
    require_once "../src/4-Emeset/Resposta.php";

    /* ----- MIDDLEWARES ----- */
    require_once "../src/5-Middleware/isAuth.php";


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
    elseif($r === "createuser"){   
        $resposta = crearUsuari($peticio,$resposta,$contenidor);
    }
    elseif($r === "signup"){ 
        $resposta = signUpPageControl($peticio, $resposta, $contenidor);
    }
    elseif($r === "login"){   
        $resposta = login($peticio,$resposta,$contenidor);
    }
    elseif($r === "mainPage"){   
        $resposta = isAuth($peticio,$resposta,$contenidor,"mostrarReserves");
    }
    elseif($r === "reserve"){   
        $resposta = isAuth($peticio,$resposta,$contenidor, "ferReserva");
    }
    elseif($r === "adminPageRes"){ 
        $resposta = isAuth($peticio, $resposta, $contenidor, "adminResControl");
    }
    elseif($r === "adminPageConfig"){ 
        $resposta = isAuth($peticio, $resposta, $contenidor, "adminConfigControl");
    }
    elseif($r === "adminPageBlock"){ 
        $resposta = isAuth($peticio, $resposta, $contenidor, "adminBlockControl");
    }
    elseif($r === "timeConfigs"){ 
        $resposta = isAuth($peticio, $resposta, $contenidor, "timeControl");
    }
    elseif($r === "deleteRes"){
        $resposta = isAuth($peticio,$resposta,$contenidor, "deleteResControl");
    }
    elseif($r === "deleteDate"){   
        $resposta = isAuth($peticio,$resposta,$contenidor, "deleteDateControl");
    }
    elseif($r === "addBlockDate"){   
        $resposta = isAuth($peticio,$resposta,$contenidor, "addBlockDateControl");
    }
    elseif($r === "profilePage"){   
        $resposta = isAuth($peticio,$resposta,$contenidor, "profilePageControl");
    }
    elseif($r === "actualitzarDades"){
        $resposta = isAuth($peticio, $resposta, $contenidor, "actualitzarDades");
    }
    elseif($r === "destroySession"){
        $resposta = destroySession($peticio, $resposta, $contenidor);
    }
    elseif($r === "reservat"){   
        $resposta = reservaEnviada($peticio, $resposta, $contenidor);
    }
    else {
        var_dump($r);
        die();
        //$resposta = ctrlError($peticio, $resposta, $contenidor);
    }

    $resposta->resposta();