<?php

    class connexio {

        public $sql = null;

        public function __construct($config)
        {
            
            // $dsn = "mysql:dbname={$config['db']};host={$config['host']}";
            // $usuari = $config["user"];
            // $clau = $config["pass"];
            $dsn =  "mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=cita_previa;user=admin_cita_previa;password=adminCitaPrevia";
            
            try {
            $this->sql = new PDO($dsn/*, $usuari, $clau*/);
            echo "si";
            } catch (PDOException $e) {
                die('Ha fallat la connexió: ' . $e->getMessage());
            }
        }

        public function getConnection(){
            return $this->sql;
    }
    }