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
        $stm = $this->sql->prepare('insert into client_tb (email, first_name, second_name, password, admin) values (:email, :first_name, :second_name, :password, :admin)');
        $stm->execute([':email' => $email, ':first_name' => $nom, ':second_name' => $cognoms, ':password' => $contrasenya, ':admin' => 0]);
    }
 }