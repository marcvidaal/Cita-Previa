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
                    



<<<<<<< HEAD
                            <div class="row">
                                <div class="col-sm-10">
                               
                                    <?php 
                                    echo "<table>";
                                    for ($i=0; $i < $periodesPossibles; $i++) { 
                                        echo "<tr>";
                                            for ($j=0; $j < 9; $j++) { ?>
                                                
                                                <td>

                                                </td>
                                                <?php }
                                    }
                                    echo "</table>";
                                    ?>

=======
                        <div class="row">
                                <div class="col-sm-10">
                               
                                
                                <?php
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
                                                <td><button type="button" class="btn btn-primary" id="<?php echo 'Carril'.$j.'Hora'.$hores[$i-1];?>">Next</button></td>
<?php
                                                }


                                                

                                                

                                                

                                               
                                                 }
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    
                                     ?>

>>>>>>> 2407cf8 (Afegeix quasi totes les hores a la taula)
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



                            <!-- <div class="col-sm-3 p-3 m-3 rounded text-light reserves">
                                <p class="m-2">data de reserva:</p>
                                <p class="m-2">hora de reserva:</p>
                                <p class="m-2">carril reservat:</p>
                            </div>
                            <div class="col-sm-3 p-3 m-3 rounded text-light reserves">
                                <p class="m-2">data de reserva:</p>
                                <p class="m-2">hora de reserva:</p>
                                <p class="m-2">carril reservat:</p>
                            </div>
                            <div class="col-sm-3 p-3 m-3 rounded text-light reserves">
                                <p class="m-2">data de reserva:</p>
                                <p class="m-2">hora de reserva:</p>
                                <p class="m-2">carril reservat:</p>
                            </div>
                            <div class="col-sm-3 p-3 m-3 rounded text-light reserves">
                                <p class="m-2">data de reserva:</p>
                                <p class="m-2">hora de reserva:</p>
                                <p class="m-2">carril reservat:</p>
                            </div> 
                            <div class="col-sm-3 p-3 m-3 rounded text-light reserves">
                                <p class="m-2">data de reserva:</p>
                                <p class="m-2">hora de reserva:</p>
                                <p class="m-2">carril reservat:</p>
                            </div>  -->
                        </div>          
                    </div> 
                </div>
            </div>
        </body>
        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>












<!-- <div class="col-sm-5 mh-100"> -->
                        <!--ROW - WELLCOME-->
                        <!-- <div class="row g-0">
                            <div class="tod col-sm-12 align-self-start h3">
                                <P>Good morning,</P>
                            </div>
                            <div class="col-sm-12 align-self-start h3">
                                <p>Marc Vidal</p>
                            </div>
                        </div> -->
                        <!--ROW - FORM-->
                        <!-- <form method="post" class="row g-0"> -->
                            <!--COLUMN - FORM CONTAINER -->
                            <!-- <div class="box col-sm-12 align-self-end rounded p-5"> -->
                                <!--ROW - TITLE CONTAINER-->
                                <!-- <div class="row g-0"> -->
                                    <!--COLUMN - TITLE-->
                                    <!-- <div class="col-sm-12 text-center mb-5 h4 text-light"> -->
                                        <!-- Crea la teva reserva -->
                                    <!-- </div> -->
                                <!-- </div> -->
                                <!--ROW - INPUTS CONTAINER-->
                                <!-- <div class="row g-0 justify-content-between"> -->
                                    <!--COLUMN - DATE-->
                                    <!-- <div class="col-sm-5"> -->
                                        <!-- <input type="date" name="date" class="rounded form-control text-center"> -->
                                    <!-- </div> -->
                                    <!--COLUMN - TIME-->
                                    <!-- <div class="col-sm-5"> -->

                                    <!-- <select name="dropdown" class="rounded w-100 form-control form-control-lg"> -->
                                            <!-- <option value="1">1</option> -->
                                        <!-- </select> -->
                                    <!-- </div> -->
                                <!-- </div> -->
                                <!--ROW - INPUTS CONTAINER-->
                                <!-- <div class="row g-0"> -->
                                    <!--COLUMN - DROPDOWN-->
                                    <!-- <div class="col-sm-12 mt-5"> -->
                                        <!-- <select name="dropdown" class="rounded w-100 form-control form-control-lg"> -->
                                            <!-- <option value="1">1</option> -->
                                        <!-- </select> -->
                                    <!-- </div> -->
                                <!-- </div> -->
                                <!--ROW - INPUTS CONTAINER-->
                                <!-- <div class="row g-0 float-end"> -->
                                    <!--COLUMN - NEXT-->
                                    <!-- <div class="col-sm-2 mt-5"> -->
                                        <!-- <button type="submit" class="rounded btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"> -->
                                            <!-- Next -->
                                        <!-- </button> -->
                                    <!-- </div> -->
                                <!-- </div> -->
                            <!-- </div>  -->
                        <!-- </form> -->
                    <!-- </div> -->