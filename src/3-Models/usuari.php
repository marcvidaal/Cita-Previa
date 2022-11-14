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
}