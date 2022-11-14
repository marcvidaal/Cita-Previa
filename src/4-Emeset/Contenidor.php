<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
 **/

namespace Emeset;

/**
 * Contenidor: Classe contenidor.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
 **/
class Contenidor
{
    public $config = [];
    public $sql;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config)
    {
        $this->config = $config;
        $this->sql = new \Daw\connexio($this->config["db"]);
        
        
    }

    public function resposta()
    {
        return new \Emeset\Resposta("../src/1-vistes/");
    }

    public function peticio()
    {
        return new \Emeset\Peticio();
    }

    public function connexio()
    {
        return $this->sql;
    }

    public function usuari()
    {
        return new \bd\usuari($this->connexio());;
    }

    public function time()
    {
        return new \bd\time($this->connexio());;
    }    
    
    public function admin()
    {
        return new \bd\admin($this->connexio());;
    }
    public function adminUser()
    {
        return new \bd\adminUser($this->connexio());;
    }

    public function pool()
    {
        return new \bd\pool($this->connexio());;
    }

}