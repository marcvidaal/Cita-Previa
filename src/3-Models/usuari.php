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
        return $stm->fetch();
    }

    public function comprovarCompteUsuari($email,$contrasenya)
    {
        $stm = $this->sql->prepare('select * from client_tb where client_email=:email and client_password=:password limit 1');
        $stm->execute([':email' => $email, ':password' => $contrasenya]);

        return $stm->fetch();
    }

    public function llistarReserves($email)
    {
        // $stm = $this->sql->prepare('select reserva_data_entrada, reserva_data_sortida, reserva_carril_id from reserva_tb where reserva_client_email=:reserva_client_email;');
        $stm = $this->sql->prepare('select r.reserva_data_entrada, r.reserva_data_sortida, c.carril_numero from reserva_tb r join carril_tb c on(r.reserva_carril_id=c.carril_id) where r.reserva_client_email=:reserva_client_email;');
        $stm->execute([':reserva_client_email' => $email]);

        $entries = $stm->fetchAll(\PDO::FETCH_ASSOC) ;

        return $entries;
    
    }

    public function getPeriode()
    {
        // $stm = $this->sql->prepare('select reserva_data_entrada, reserva_data_sortida, reserva_carril_id from reserva_tb where reserva_client_email=:reserva_client_email;');
        // $stm = $this->sql->prepare('select p.piscina_periode from client_tb cli join reserva r on(cli.client_email=r.reserva_client_email) join carril_tb c on(r.reserva_carril_id=c.carril_id) join piscina_tb p on(c.carril_piscina_id=p.piscina_id) where cli.client_email=:client_email;');
        $stm = $this->sql->prepare('select MINUTE(piscina_periode) from piscina_tb limit 1;');
        $stm->execute();

        //retorna un valor que ens interessa directament. no un array
        return $stm->fetchColumn();
    
    }

    public function getHorariDia($email)
    {
        // $stm = $this->sql->prepare('select reserva_data_entrada, reserva_data_sortida, reserva_carril_id from reserva_tb where reserva_client_email=:reserva_client_email;');
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
        $stm = $this->sql->prepare('select horari_hora_obert,horari_hora_tencat from horari_tb where horari_dia=:diaSetmana;');
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

    // public function provaa($email)
    // {
    //     $stm = $this->sql->prepare('select client_password from client_tb where client_email=:email;');
    //     $stm->execute([':email' => $email]);
    //     $diferenciaHores = $stm->fetchColumn() ;
    //     return $diferenciaHores;
    
    // }


 }