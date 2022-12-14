<?php

/**
 * CITA PREVIA.
 *
 * @author: marc vidal ardevol marcvidaal5@gmail.com
 *
 * model que gestiona les peticions de reserves del main user.
 **/

namespace bd;

class pool
{

    public $sql = null;



    public function __construct($connexioDB)
    {
        $this->sql = $connexioDB->getConnection();
    }

    function getPeriod()
    {
    }
    //RETORNA TOTS ELS DIES BLOQUEJATS  
    public function getBlockedDays()
    {
        $query = 'SELECT dia_bloquejat FROM dia_bloquejat_tb';
        $stm = $this->sql->prepare($query);
        $stm->execute();
        $blockedDays = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $blockedDays;
    }

    //RETORNA EL HORARI
    public function getDay($weekday)
    {
        $query = 'SELECT * FROM horari_tb WHERE horari_dia=:weekday';
        $stm = $this->sql->prepare($query);
        $stm->execute([':weekday' => $weekday]);
        $day = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $day;
    }

    //RETORNA EL PERIODE DE TRIA DE PISCINA
    public function getPeriode()
    {
        $query = 'SELECT piscina_periode FROM piscina_tb';
        $stm = $this->sql->prepare($query);
        $stm->execute();
        return $stm->fetchColumn();
    
    }

    //RETORNA LA CANTITAT DE CARRILS DE UNA PISCINA
    public function getLanes(){
        $query = 'SELECT COUNT(carril_numero) FROM carril_tb';
        $stm = $this->sql->prepare($query);
        $stm->execute();
        return $stm->fetchColumn();
    }

    //INSERIR UNA NOVA RESERVA
    public function pushReserve($start,$end,$lane,$email)
    {
        $query = 'INSERT INTO reserva_tb (reserva_data_entrada, reserva_data_sortida, reserva_carril_id, reserva_client_email) VALUES (:reserva_data_entrada, :reserva_data_sortida, :carril, :email)';
        $stm = $this->sql->prepare($query);
        $stm->execute([':reserva_data_entrada' => $start, ':reserva_data_sortida' => $end, ':carril' => $lane, ':email' => $email]);
    }
}
