<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    
        <body class="p-2">
            <!--CONTAINER-->
            <div class="container rounded g-0 p-4 mainPageBody">
                <!--ROW - TOP-->
                <div class="row d-flex justify-content-between g-0 mb-4 ">
                    <!--MY PROFILE - COLUMN-->
                    <div class="col-sm-2">
                        <a href="index.php?r=profilePage">
                            <button data-toggle="button" aria-pressed="false" autocomplete="off" class="rounded btn btn-info btn-lg text-light">
                                My profile
                            </button>
                        </a>
                    </div>
                    
                    <!--MY PROFILE - COLUMN-->
                    <div class="col-sm-2 text-end">
                        <a href="index.php?r=destroySession" >
                            <button data-toggle="button" aria-pressed="false" autocomplete="off" class="rounded btn btn-info btn-lg text-light">
                                Log out
                            </button>
                        </a>
                    </div>
                </div>
                <!--ROW - MID-->
                <div class="row mb-5 g-0 justify-content-between">
                    <!--RIGHT - COLUMN-->
                    <div class="box col-sm-12 rounded prova">
                        <form action="index.php" method="POST" class="mx-3">
                            <input type="hidden" name="r" value="reserve">
                                <div class="row d-flex justify-content-center align-items-center m-4">
                                    <div class="col-sm-12">
                                        <input type="date" name="data" class="rounded form-control text-center" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 1 month')); ?>">
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center align-items-center m-4">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary col-sm-12">Next</button>
                                    </div>
                                </div>
                        </form>
                    



                        <div class="row">
                                <div class="col-sm-10">
                               
                                
                                <?php

                                if(isset($periodesPossibles)){
                                    echo "<table>";
                                    for ($i=0; $i <= $periodesPossibles; $i++) { 
                                        echo "<tr>";
                                            for ($j=0; $j < 11; $j++) {
                                                if($i==0 and $j==0){
                                                    echo '<th>Period</th>';
                                                }
                                                elseif($i==0 and $j>0){?>
                                                    <th>Carril <?=$j;?></th>
                                                <?php
                                                }

                                                elseif ($j==0 and $i>0) {
                                                    
                                                    ?>
                                                
                                                    <td><?=$hores[$i-1].' '.$hores[$i];?></td>


                                                    <?php

                                                }
                                                elseif ($j>0 and $i>0) {
                                                    ?>
                                                <td>
                                                    <form action="index.php" method="POST">
                                                        <input type="hidden" name="r" value="reservat">
                                                        <?php
                                                        
                                                        $reservaDisponible = true;
                                                        foreach ($horarisOcupats as $entry) {
                                                            if ($entry["reserva_carril_id"]==$j and $entry["reserva_data_entrada"]==$data." ".$hores[$i-1].":00") {
                                                                $reservaDisponible = false;
                                                                break;
                                                            }
                                                            else {
                                                                $reservaDisponible = true;
                                                            }

                                                        }

                                                        if($reservaDisponible===true){?>

                                                            <button type="submit" name="reserveAction" class="btn btn-primary" value="<?php echo $j.'_'.$data." ".$hores[$i-1].":00";?>" id="<?php echo $j.'-'.$hores[$i-1];?>">Reserve</button>

                                                            <?php
                                                        }
                                                        else {?>
                                                            <p>no disp</p>
                                                            <?php
                                                        }                                                        
                                                        ?>
                                                    </form>
                                                </td>
<?php
                                                }         
                                                 }
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    
                                     
                                }
                                ?>

                                    

                                </div>
        
                            </div> 
                       
                    </div>  
                    <!--LEFT - COLUMN-->
                    
                </div>
                <!--ROW - BOTTOM-->
                <div class="row g-0 justify-content-end"> <!--float-end-->
                    <!--COLUMN - RESEVES-->
                    <div class="box col-sm-12 rounded">
                        <div class="scrollmenu rounded">


                            <?php foreach($list as $entry) { ?>
                                <div class="col-sm-3 p-3 m-3 rounded text-light reserves">
                                <p class="m-2">Inici: <?=$entry["reserva_data_entrada"];?></p>
                                <p class="m-2">Final: <?=$entry["reserva_data_sortida"];?></p>
                                <p class="m-2">Carril: <?=$entry["carril_numero"];?></p>
                                </div>
                            <?php } ?>
                        </div>          
                    </div> 
                </div>
            </div>
        </body>
        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>