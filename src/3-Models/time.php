<?php

    namespace bd;

    class time{
    
        public $sql = null;

        /* ----- CRIDEM LA CONEXIO A LA BASSE DE DADES ----- */
        public function __construct($connexioDB)
        {
            $this->sql = $connexioDB->getConnection();
        }
        
        /* ----- RETORNA ELS VALORS DE LA BASSE DE DADES I ELS GUARDA A UN ARRAY ----- */
        public function pullTime()
        {
            $stmt = $this->sql->prepare('SELECT * FROM horari_tb');
            $stmt->execute();
            /* ----- GUARRDEM TOT LA INFO DINS DE L'ARRAY TIMES ----- */
            $times = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $times;
        }

        /* ----- ACTUALITZA ELS TEMPS DE LA BASSE DE DADES AMB ELS NOUS INTRODUITS ----- */
        public function updateTime($weekdays)
        {
            $i = 1;
            foreach ($weekdays as $day) {

                $closed = 0;
                if($day['closed'] === "on"){
                    $closed = 1;
                    $day['start'] = "00:00:00";
                    $day['end'] = "00:00:00";
                    
                }
                
                $stmt = $this->sql->prepare('UPDATE horari_tb SET horari_hora_obert = :horari_hora_obert, horari_hora_tencat = :horari_hora_tencat, horari_tencat = :horari_tencat WHERE horari_id = :horari_id');
                $stmt->execute([':horari_hora_obert' => $day['start'], ':horari_hora_tencat' => $day['end'], ':horari_tencat' => $closed, ':horari_id' => $i]);
                $i = $i + 1;
                
                if ($stmt->errorCode() !== '00000') {
                    $err = $stmt->errorInfo();
                    $code = $stmt->errorCode();
                    die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
                }
            }
        }

    }