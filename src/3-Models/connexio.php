<?php

    class connexio {

        public $sql = null;

        public function __construct($config)
        {
            $db = $config["path"] . $config["name"];
            $this->sql = new \SQLite3($db);
            if (! file_exists($db)) {
                die("No s'ha pogut obrir la base de dades");
            }
        }

        public function getConnection(){
            return $this->sql;
    }
    }