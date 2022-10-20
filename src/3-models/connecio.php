<?php

namespace cita_previa;

    class connexio {

        public $sql = null;

        public function __construct($config){

            /* ------- CONNECCIO A LA BASSE DE DADES ------- */
            $dsn = "mysql:dbname={$config['db']};host={$config['host']}";
            $usuari = $config["user"];
            $clau = $config["pass"];
            $this->sql = new PDO($dsn, $usuari, $clau);

            try {
                $this->sql = new PDO($dsn, $usuari, $clau);
            } catch (PDOException $e) {
                die('Ha fallat la connexió: ' . $e->getMessage());
            }
        }

        public function getConnection(){
            return $this->sql;
        }
    }