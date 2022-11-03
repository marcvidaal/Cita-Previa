<?php

    namespace bd;

    class adminRes{
        
        public $sql = null;

        /* ----- CRIDEM LA CONEXIO A LA BASSE DE DADES ----- */
        public function __construct($connexioDB)
        {
            $this->sql = $connexioDB->getConnection();
        }
        
        /* ----- RETORNA ELS VALORS DE LA BASSE DE DADES I ELS GUARDA A UN ARRAY ----- */
        public function pullRes()
        {
            $stmt = $this->sql->prepare('SELECT * FROM reserva_tb');
            $stmt->execute();
            /* ----- GUARRDEM TOT LA INFO DINS DE L'ARRAY RESERVES ----- */
            $reserves = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $reserves;
        }
    }