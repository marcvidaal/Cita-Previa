<?php

    /* ----- DATABASE CONFIGS ----- */
    require_once "../src/config.php";


    /* ----- CONTROLLERS ----- */

    require_once "../src/2-controls/homeControl.php";

        /* ----- admin ----- */
        require_once "../src/2-controls/admin/addBlockDateControl.php";
        require_once "../src/2-controls/admin/adminBlockControl.php";
        require_once "../src/2-controls/admin/adminConfigControl.php";
        require_once "../src/2-controls/admin/adminResControl.php";
        require_once "../src/2-controls/admin/adminUserControl.php";
        require_once "../src/2-controls/admin/deleteUserControl.php";
        require_once "../src/2-controls/admin/deleteUserResControl.php";
        require_once "../src/2-controls/admin/timeControl.php";
        require_once "../src/2-controls/admin/toggleAdminControl.php";
        require_once "../src/2-controls/admin/addBlockDateControl.php";
        require_once "../src/2-controls/admin/deleteDateControl.php";

        /* ----- common ----- */
        require_once "../src/2-controls/common/actualitzarDades.php";
        require_once "../src/2-controls/common/destroySesion.php";
        require_once "../src/2-controls/common/profilePageControl.php";
        require_once "../src/2-controls/common/deleteResControl.php";

        /* ----- authenthicator ----- */
        require_once "../src/2-controls/authenthicator/createUserControl.php";
        require_once "../src/2-controls/authenthicator/loginTester.php";
        require_once "../src/2-controls/authenthicator/signinControl.php";
        require_once "../src/2-controls/authenthicator/signupControl.php";

        /* ----- user ----- */
        // require_once "../src/2-controls/user/mainControl.php";
        // require_once "../src/2-controls/user/reservatControl.php";
        // require_once "../src/2-controls/user/reserveControl.php";
        // require_once "../src/2-controls/user/showReserves.php";
        require_once "../src/2-controls/user/loadMainPage.php";


    /* ----- MODELS ----- */
    require_once "../src/3-models/connexio.php";
    require_once "../src/3-models/usuari.php";
    require_once "../src/3-models/time.php";
    require_once "../src/3-models/admin.php";
    require_once "../src/3-models/adminUsers.php";
    require_once "../src/3-models/reserves.php";
    
    /* ----- EMESET ----- */
    require_once "../src/4-Emeset/Contenidor.php";
    require_once "../src/4-Emeset/Peticio.php";
    require_once "../src/4-Emeset/Resposta.php";

    /* ----- MIDDLEWARES ----- */
    require_once "../src/5-Middleware/isAuth.php";
    require_once "../src/5-Middleware/isAdmin.php";


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
        $resposta = isAuth($peticio,$resposta,$contenidor, "loadMainPage");
    }
    // elseif($r === "mainPage"){   
    //     $resposta = isAuth($peticio,$resposta,$contenidor,"mostrarReserves");
    // }
    // elseif($r === "reserve"){   
    //     $resposta = isAuth($peticio,$resposta,$contenidor, "ferReserva");
    // }
    elseif($r === "adminPageRes"){ 
        $resposta = isAdmin($peticio, $resposta, $contenidor, "adminResControl");
    }
    elseif($r === "adminPageConfig"){ 
        $resposta = isAdmin($peticio, $resposta, $contenidor, "adminConfigControl");
    }
    elseif($r === "adminPageBlock"){ 
        $resposta = isAdmin($peticio, $resposta, $contenidor, "adminBlockControl");
    }
    elseif($r === "adminPageUser"){ 
        $resposta = isAdmin($peticio, $resposta, $contenidor, "adminUserControl");
    }
    elseif($r === "toggleAdmin"){ 
        $resposta = isAdmin($peticio, $resposta, $contenidor, "toggleAdminControl");
    }
    elseif($r === "timeConfigs"){ 
        $resposta = isAdmin($peticio, $resposta, $contenidor, "timeControl");
    }
    elseif($r === "deleteRes"){
        $resposta = isAuth($peticio,$resposta,$contenidor, "deleteResControl");
    }
    elseif($r === "deleteDate"){   
        $resposta = isAdmin($peticio,$resposta,$contenidor, "deleteDateControl");
    }
    elseif($r === "deleteUser"){   
        $resposta = isAdmin($peticio,$resposta,$contenidor, "deleteUserControl");
    }
    elseif($r === "deleteUserRes"){   
        $resposta = isAdmin($peticio,$resposta,$contenidor, "deleteUserResControl");
    }
    elseif($r === "addBlockDate"){   
        $resposta = isAdmin($peticio,$resposta,$contenidor, "addBlockDateControl");
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
    // elseif($r === "reservat"){   
    //     $resposta = reservaEnviada($peticio, $resposta, $contenidor);
    // }
    else {
        var_dump($r);
        die();
        //$resposta = ctrlError($peticio, $resposta, $contenidor);
    }

    $resposta->resposta();