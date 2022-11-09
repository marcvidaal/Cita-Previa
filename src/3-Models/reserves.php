<?php

namespace bd;

 class reserves{
    
    public $sql = null;



    public function __construct($connexioDB)
    {
        $this->sql = $connexioDB->getConnection();
    }



 }