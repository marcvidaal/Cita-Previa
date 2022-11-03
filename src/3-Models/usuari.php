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
        $stm = $this->sql->prepare('select r.reserva_data_entrada, r.reserva_data_sortida, c.carril_numero from reserva_tb r join carril_tb c on(r.reserva_carril_id=c.carril_id) where reserva_client_email=:reserva_client_email;');
        $stm->execute([':reserva_client_email' => $email]);

        $entries = $stm->fetchAll(\PDO::FETCH_ASSOC) ;

        return $entries;
    
    }
 }