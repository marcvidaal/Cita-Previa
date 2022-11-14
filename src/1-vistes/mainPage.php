<!doctype html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- text/css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/date-1.1.2/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="styles.css">
</head>

<body class="p-2">
    <!--CONTAINER-->
    <div class="container rounded g-0 p-4 mainPageBody">
        <!--ROW - TOP-->
        <div class="row d-flex justify-content-between g-0 mb-4 ">
            <!--MY PROFILE - COLUMN-->
            <div class="col-sm-2">
                <a href="index.php?r=profilePage" class="rounded btn btn-info btn-lg text-light">
                    <?=$email?>
                </a>
            </div>
            <?php
            if($adminSet){
                echo "
                <!--GO ADMIN-->
                <div class='col-sm-2'>
                    <a href='index.php?r=adminPageRes' class='rounded btn btn-info btn-lg ml-2 text-light'>
                        Go admin
                    </a>
                </div>
                ";
            }
            ?>
            <!--LOGOUT- COLUMN-->
            <div class="col-sm-2 text-end">
                <a href="index.php?r=destroySession" class="rounded btn btn-info btn-lg text-light">
                    Log out
                </a>
            </div>
        </div>

        <!--ROW - MID-->
        <div class="row mb-5 g-0 justify-content-between">
            <!--RIGHT - COLUMN-->
            <div class="box col-sm-12 rounded p-2 prova scrollmenu2">
                <?php
                if($print){
                    echo"
                    <table id= 'mainTalbe'>
                        <thead>
                            <tr>
                                <!-- Times Blank -->
                                <th></th>
                                ";
                                //Imprimim els carrils
                                for ($lane=1; $lane <= $lanes; $lane++) { 
                                    echo"
                                    <th>Lane: ".$lane."</th>
                                    ";
                                }
                                echo "
                            </tr>
                        </thead>
                        <tbody>
                        ";
                        //Per a cada rang (FILES TOTALS)
                        for ($range=0; $range < count($timetable) ; $range++) { 
                            echo"
                            <tr>
                                <td>".$timetable[$range]."</td>
                                ";
                                //Per a cada carril (COLUMNA DE CADA FILA)
                                for ($lane=1; $lane <= $lanes; $lane++) {
                                    $unocupied = true;
                                    foreach ($occupied as $key => $value) {
                                        $unocupied = ($value[0] == $lane && $value[1] == substr($timetable[$range], 0, 5)) ? false : true; 
                                        if (!$unocupied) {
                                            break;
                                        }           
                                    }
                                    if(!$unocupied)
                                        echo"
                                        <td> <a class= 'd-flex justify-content-center btn btn-danger'>Unable</<</td>
                                        ";
                                    else {
                                        echo"
                                        <td> 
                                            <a href='index.php?r=reserve&lane=".$lane."&day=".$data."&start=".substr($timetable[$range], 0, 5)."&end=".substr($timetable[$range], 9, 15)."' class= 'd-flex justify-content-center btn btn-primary'>Reserve</a>
                                        </td>
                                        ";
                                    }
                                }
                                echo"
                                </tr>
                                ";
                            }
                            echo"
                        </tbody>
                    </table>";
                }
                elseif (isset($closed)) {
                    if ($closed = "todayClosed") {
                        echo "<div class='alert alert-danger' role='alert'>Date unavailable</div>";
                    }
                    elseif ($closed == "dateClosed") {
                        echo "<div class='alert alert-danger' role='alert'>Pool is closed on".$weekday.". Try choosing another date.</div>";
                    }
                    elseif ($closed == "dateBloked") {
                        echo "<div class='alert alert-danger' role='alert'>This date has been locked. Try choosing another date.</div>";
                    }
                }
                ?>
                <form action="index.php" method="POST" class= "row">
                    <!--R VALUE-->
                    <input type="hidden" name="r" value="mainPage">
                    <!--DATE SELECT-->
                    <div class="col-sm-2 NextButtonSignUp">
                        <input type=date name=data class='col-sm-5 form-control form-control-sm' required value = '<?$data?>' min='<?php echo date('Y-m-d'); ?>' max='<?php echo date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 month')); ?>'>
                    </div>
                    <!--DATE SUBMIT-->
                    <div class="col-sm-10 NextButtonSignUp">
                        <input type="submit" class="btn btn-primary" value="Go">
                    </div>
                </form>
            </div>
        </div>
        <!--ROW - BOTTOM-->
        <div class="row g-0 justify-content-end">
            <!--COLUMN - RESEVES-->
            <div class="box col-sm-12 rounded">
                <!--SCROLMEMU - RESEVES-->
                <div class="scrollmenu rounded">
                    <!--RESERVES - CARD-->
                    <?php 
                    if (isset($list)){
                        foreach ($list as $entry) {
                            echo"
                            <div class='col-sm-3 p-3 m-3 rounded text-light reserves'>
                                <p class='m-2'>Begin: ". $entry['reserva_data_entrada'] . "</p>
                                <p class='m-2'>End: ". $entry['reserva_data_sortida'] . "</p>
                                <p class='m-2'>Lane: ". $entry['carril_numero'] . "</p>
                                <a href='index.php?r=deleteRes&id=" . $entry['reserva_id'] . "' type = 'button' class='btn btn-danger btn-sm' id='" . $entry['reserva_id'] . "'>remove</a>
                            </div>
                            ";
                        } 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<!--text/javascript-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</html>