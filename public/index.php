<?php

    /* ----- DATABASE CONFIGS ----- */
    include "../src/config.php";

    include "../src/4-validators/Contenidor.php";
    include "../src/4-validators/Peticio.php";
    include "../src/4-validators/Resposta.php";


    /* ----- CONTROLERS ----- */
    include "../src/2-controls/adminControl.php";
    include "../src/2-controls/mainControl.php";
    include "../src/2-controls/profileControl.php";
    include "../src/2-controls/signinControl.php";
    include "../src/2-controls/signupControl.php";
    include "../src/2-controls/homeControl.php";



    /* ----- MODELS ----- */



    /* ----- DATA ----- */
    $contenidor = new \Emeset\Contenidor($config);

    $peticio = $contenidor->peticio();
    $resposta = $contenidor->resposta();

    
    /* ----- REQUESTER ----- */
    if(isset($_REQUEST['r'])){
        $r = $_REQUEST['r'];
    }else{
        $r = "";
    }
    

    if($r == "") {
        $resposta = ctrlHome($peticio, $resposta, $contenidor);
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

    $resposta->resposta();
