<?php

namespace bd;

 class time{
    
    public $sql = null;

   
    public function __construct($connexioDB)
    {
        $this->sql = $connexioDB->getConnection();
    }

    public function updateTime($weekdays)
    {
        $i = 0;
        foreach ($weekdays as $day) {

            $sql = "UPDATE horari_tb SET horari_hora_obert = :horari_hora_obert, horari_hora_tancat = :horari_hora_tancat, horari_tencat = :horari_tencat WHERE horari_dia = :horari_dia";
            $stmt = $this->sql->prepare($sql);
            $stmt->bindParam(':horari_hora_obert', $day[start]);
            $stmt->bindParam(':horari_hora_tancat', $day[end]);
            $stmt->bindParam(':horari_tencat', $day[closed]);
            $stmt->bindParam(':horari_dia', array_keys($weekdays)[$i]);
            $i = $i + 1;
            $stmt->execute();
        }
    }
 }