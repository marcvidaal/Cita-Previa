<?php
/**
 * CITA PREVIA.
 *
 * @author: marc vidal ardevol marcvidaal5@gmail.com
 *
 * model que gestiona les peticions de reserves del main user.
 **/
namespace bd;

 class reserves{
    
    public $sql = null;



    public function __construct($connexioDB)
    {
        $this->sql = $connexioDB->getConnection();
    }





 }