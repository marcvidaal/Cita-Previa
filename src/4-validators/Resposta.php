<?php

    class Resposta
    {

        public $valors = [];
        public $header = false;
        public $path;
        public $plantilla;
        public $redireccio = false;



        public function __construct($path = "../src/views/")
        {
            $this->path = $path;
        }


        public function set($id, $valor)
        {
            $this->valors[$id] = $valor;
        }



        public function setSession($id, $valor)
        {
            $_SESSION[$id] = $valor;
        }



        public function setCookie($name, $value = "", $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false)
        {
            setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
        }


        
        public function setHeader($header)
        {
            $this->header = $header;
        }

        
        public function redirect($header)
        {
            $this->setHeader($header);
            $this->redireccio = true;
        }


        
        public function setTemplate($p)
        {
            $this->plantilla = $p;
        }

        
        public function resposta()
        {
            if ($this->redireccio) {
                header($this->header);
            } else {
                if ($this->header !== false) {
                    header($this->header);
                }
                extract($this->valors);
                include $this->path . $this->plantilla;
            }
        }
    }
