<?php
/**
 * CITA PREVIA.
 *
 * @author: marc vidal ardevol marcvidaal5@gmail.com
 *
 * model que gestiona la conexio a la base de dades.
 **/

namespace Daw;

class connexio
{

    public $sql = null;

    public function __construct($config)
    {

        //$dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
        $usuari = $config["user"];
        $clau = $config["pass"];
        $dsn =  "mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=cita_previa;";

        try {
            $this->sql = new \PDO($dsn, $usuari, $clau);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->sql;
    }
}
