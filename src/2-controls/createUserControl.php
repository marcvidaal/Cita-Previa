<?php

    function crearUsuari($peticio,$resposta,$contenidor)
    {
        $usuari = $contenidor->usuari();
        $email = $peticio->get(INPUT_POST, "email");
        $nom = $peticio->get(INPUT_POST, "firstName"); 
        $cognoms = $peticio->get(INPUT_POST, "secondName"); 
        $contrasenya = $peticio->get(INPUT_POST, "password"); 


        if ($usuari->comprovarExistenciaUsuari($email)===false) {
            $usuari->inserirUsuari($email,$nom,$cognoms,$contrasenya);  
            $resposta->redirect("location: index.php");          
        }
        else{
            $resposta->redirect("location: index.php?r=signup");  
        }


        return $resposta;

    }
