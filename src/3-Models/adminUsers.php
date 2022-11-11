<?php

/**
 * CITA PREVIA.
 *
 * @author: marc vidal ardevol marcvidaal5@gmail.com
 *
 * model que gestiona totes les peticions de la pagina adinistrador users.
 **/

namespace bd;

class adminUser
{

    public $sql = null;

    /* ----- CRIDEM LA CONEXIO A LA BASSE DE DADES ----- */
    public function __construct($connexioDB)
    {
        $this->sql = $connexioDB->getConnection();
    }

    /* ----- RETORNA UN ARRAY AMB TOTS ELS USUARIS----- */
    public function pullUsers()
    {
        $stm = $this->sql->prepare('SELECT client_email, client_first_name, client_second_name, client_admin FROM client_tb');
        $stm->execute();
        $entries = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $entries;
    }

    /* ----- ET PERMET GESTIONAR ELS ADMINISTRADORS----- */
    public function toggleAdmin($email, $admin)
    {
        $stm = $this->sql->prepare('UPDATE client_tb SET client_admin = :admin WHERE client_email = :email');
        $stm->bindParam(':admin', $admin);
        $stm->bindParam(':email', $email);
        $stm->execute();
    }

    public function deleteUser($email)
    {
        $stm = $this->sql->prepare('DELETE FROM client_tb WHERE client_email = :email');
        $stm->bindParam(':email', $email);
        $stm->execute();
    }

    public function deleteUserRes($email)
    {
        $stm = $this->sql->prepare('DELETE FROM reserva_tb WHERE reserva_client_email = :email');
        $stm->bindParam(':email', $email);
        $stm->execute();
    }
}
