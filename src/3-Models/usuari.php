<?php

namespace bd;

 class usuari{
    
    public $sql = null;

   
    public function __construct($connexioDB)
    {
        $this->sql = $connexioDB->getConnection();
    }

    public function inserirUsuari($email,$nom,$cognoms,$contrasenya)
    {
        $stm = $this->sql->prepare('insert into client_tb (client_email, client_first_name, client_second_name, client_password, client_admin) values (:email, :first_name, :second_name, :password, :admin)');
        $stm->execute([':email' => $email, ':first_name' => $nom, ':second_name' => $cognoms, ':password' => $contrasenya, ':admin' => 0]);
    }

    public function comprovarExistenciaUsuari($email)
    {
        $stm = $this->sql->prepare('select client_email from client_tb where client_email=:email limit 1');
        $stm->execute([':email' => $email]);
        return $stm->fetchColumn();
    }

    public function getUser($email)
    {
        $query = 'SELECT client_email, client_password, client_admin FROM client_tb WHERE client_email=:email;';
        $stm = $this->sql->prepare($query);
        $stm->execute([':email' => $email]);

        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateFirstName($email,$name)
    {
        $stm = $this->sql->prepare('update client_tb set client_first_name=:name where client_email=:email;');
        $stm->execute([':name' => $name, ':email' => $email]);
    
    }

    public function updateSecondName($email,$secondName)
    {
        $stm = $this->sql->prepare('update client_tb set client_second_name=:secondName where client_email=:email;');
        $stm->execute([':secondName' => $secondName, ':email' => $email]);
    
    }

    public function updatePassword($email,$password)
    {
        $stm = $this->sql->prepare('update client_tb set client_password=:password where client_email=:email;');
        $stm->execute([':password' => $password, ':email' => $email]);
    
    }

/**---------------------------------------------------------- */
    public function llistarReserves($email)
    {
        // $stm = $this->sql->prepare('select reserva_data_entrada, reserva_data_sortida, reserva_carril_id from reserva_tb where reserva_client_email=:reserva_client_email;');
        $stm = $this->sql->prepare('select r.reserva_data_entrada, r.reserva_data_sortida, c.carril_numero from reserva_tb r join carril_tb c on(r.reserva_carril_id=c.carril_id) where r.reserva_client_email=:reserva_client_email and r.reserva_data_entrada > NOW();');
        $stm->execute([':reserva_client_email' => $email]);

        $entries = $stm->fetchAll(\PDO::FETCH_ASSOC) ;

        return $entries;
    
    }

    public function getPeriode()
    {
        $stm = $this->sql->prepare('select MINUTE(piscina_periode) from piscina_tb limit 1;');
        $stm->execute();

        return $stm->fetchColumn();
    
    }

    public function getHorariDia($email)
    {
        $stm = $this->sql->prepare('select horari_hora_obert;');
        $stm->execute([':client_email' => $email]);
        $entries = $stm->fetchAll(\PDO::FETCH_ASSOC) ;
        return $entries;
    
    }

    public function getNomDiaData($data)
    {
        $stm = $this->sql->prepare("select DAYNAME(:data)");
        $stm->execute([':data' => $data]);
        return $stm->fetchColumn();
    
    }

    public function getBlockedDays()
    {
        $stm = $this->sql->prepare('select dia_bloquejat from dia_bloquejat_tb;');
        $stm->execute();
        $blockedDaysArray = $stm->fetchAll(\PDO::FETCH_ASSOC) ;
        return $blockedDaysArray;
    
    }

    public function periodePerDia($nomDiaSetmana)
    {
        $stm = $this->sql->prepare('select time_format(horari_hora_obert,"%H:%i") as horari_hora_obert,time_format(horari_hora_tencat,"%H:%i") as horari_hora_tencat from horari_tb where horari_dia=:diaSetmana;');
        $stm->execute([':diaSetmana' => $nomDiaSetmana]);
        $horariEntradaiSortida = $stm->fetchAll(\PDO::FETCH_ASSOC) ;
        return $horariEntradaiSortida;
    
    }


    public function diferenciaMinutsEntrePeriode($nomDiaSetmana)
    {
        $stm = $this->sql->prepare('select timestampdiff(minute,horari_hora_obert,horari_hora_tencat) from horari_tb where horari_dia=:diaSetmana;');
        $stm->execute([':diaSetmana' => $nomDiaSetmana]);
        $diferenciaHores = $stm->fetchColumn() ;
        return $diferenciaHores;
    
    }



    public function retornaHoraAmbPeriodeAfegit($hora,$periode)
    {
        $stm = $this->sql->prepare('select time_format(addtime(:hora,"0:'.$periode.':0"),"%H:%i");');
        $stm->execute([':hora' => $hora]);
        $horaAfegida = $stm->fetchColumn();
        return $horaAfegida;
    
    }

    public function reservaDateTimeSortida($dateTime)
    {
        $stm = $this->sql->prepare('select date_add(:dateTime,interval 30 minute);');
        $stm->execute([':dateTime' => $dateTime]);
        $dateTime = $stm->fetchColumn();
        return $dateTime;
    
    }


    public function pushReserve($reservaDataEntrada,$reservaDataSortida,$carril,$email)
    {
        $stm = $this->sql->prepare('insert into reserva_tb (reserva_data_entrada, reserva_data_sortida, reserva_carril_id, reserva_client_email) values (:reserva_data_entrada, :reserva_data_sortida, :carril, :email)');
        $stm->execute([':reserva_data_entrada' => $reservaDataEntrada, ':reserva_data_sortida' => $reservaDataSortida, ':carril' => $carril, ':email' => $email]);
    }



    //prova2

    public function horariOcupat()
    {
        $stm = $this->sql->prepare('select reserva_data_entrada,reserva_carril_id from reserva_tb where reserva_data_entrada > NOW();');
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }







 }