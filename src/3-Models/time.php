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
        $i = 1;
        foreach ($weekdays as $day) {

            $closed = 0;
            if($day['closed'] === "on"){
                $closed = 1;
            }
            
            $stmt = $this->sql->prepare('UPDATE horari_tb SET horari_hora_obert = :horari_hora_obert, horari_hora_tencat = :horari_hora_tencat, horari_tencat = :horari_tencat WHERE horari_id = :horari_id');
            $stmt->execute([':horari_hora_obert' => $day['start'], ':horari_hora_tencat' => $day['end'], ':horari_tencat' => $closed, ':horari_id' => $i]);
            $i = $i + 1;
            
            die();
            if ($stmt->errorCode() !== '00000') {
                $err = $stmt->errorInfo();
                $code = $stmt->errorCode();
                die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
            }
        }
    }
 }