<?php

    /* ----- DATABASE CONFIGS ----- */
    require_once "../src/1-vistes/adminPage.php";


    /* ----- CONTROLERS ----- */
<<<<<<< HEAD
    // require_once "../src/2-controls/adminControl.php";
    // require_once "../src/2-controls/mainControl.php";
    // require_once "../src/2-controls/profileControl.php";
    // require_once "../src/2-controls/signinControl.php";
    // require_once "../src/2-controls/signupControl.php";
=======
    require_once "../src/2-controls/adminControl.php";
    require_once "../src/2-controls/mainControl.php";
    require_once "../src/2-controls/profileControl.php";
    require_once "../src/2-controls/signinControl.php";
    require_once "../src/2-controls/signupControl.php";
    require_once "../src/2-controls/homeControl.php";
>>>>>>> 015d7af (FUNCIONA LOCAL)


    /* ----- MODELS ----- */
    // require_once "../src/3-models/connexio.php";

    
    /* ----- EMESET ----- */
<<<<<<< HEAD
    // $contenidor = new \Emeset\Contenidor($config);
=======
    require_once "../src/4-Emeset/Contenidor.php";
    require_once "../src/4-Emeset/Peticio.php";
    require_once "../src/4-Emeset/Resposta.php";
>>>>>>> 015d7af (FUNCIONA LOCAL)

    $contenidor = new \Emeset\Contenidor($config);
    $peticio = $contenidor->peticio();
    $resposta = $contenidor->resposta();

    
    // /* ----- REQUESTER ----- */
    if(isset($_REQUEST['r'])){
        $r = $_REQUEST['r'];
    }else{
        $r = "";
    }

<<<<<<< HEAD
    // if($r == "") {
    //     $resposta = homeControl($peticio, $resposta, $contenidor);
    // }
    // elseif($r === "signUp"){   
    //     $resposta = signUpPageControler();
    // }
    // elseif($r === "logOut"){   
    //     $resposta = logOutPageControler();
    // }
    // elseif($r === "mainPage"){   
    //     $resposta = mainPageControler();
    // }
=======

    // /* ----- ROUTER ----- */

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
>>>>>>> 015d7af (FUNCIONA LOCAL)
