<?php

    /* ----- DATABASE CONFIGS ----- */
    include "../src/config.php";


    /* ----- CONTROLERS ----- */
    include "../src/2-controls/adminControl.php";
    include "../src/2-controls/mainControl.php";
    include "../src/2-controls/profileControl.php";
    include "../src/2-controls/signinControl.php";
    include "../src/2-controls/signupControl.php";


    /* ----- MODELS ----- */
    include "";
    include "";


    /* ----- DATA ----- */
    $contenidor = new \Emeset\Contenidor($config);

    $peticio = $contenidor->peticio();
    $resposta = $contenidor->resposta();

    
    /* ----- REQUESTER ----- */
    $r = $_REQUEST['r'];

    if($r == "") {
        $resposta = signInPageControler();
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
    elseif($r === "adminPage"){   
        $resposta = adminPageControler();
    }
    elseif($r === "profilePage"){   
        $resposta = profilePageControler();
    }
