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
            $stmt = $this->sql->prepare('SELECT r.reserva_id, r.reserva_client_email, r.reserva_data_entrada, r.reserva_data_sortida, c.carril_numero  FROM reserva_tb r JOIN carril_tb c ON (r.reserva_carril_id = c.carril_id);');
            $stmt->execute();
            /* ----- GUARRDEM TOT LA INFO DINS DE L'ARRAY RESERVES ----- */
            $reserves = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $reserves;
        }

        /* ----- ELIMINA UNA RESERVA ----- */
        public function deleteRes($id)
        {
            $stmt = $this->sql->prepare('DELETE FROM reserva_tb WHERE reserva_id = :id;');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }