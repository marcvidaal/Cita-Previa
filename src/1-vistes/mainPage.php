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
                        <a href="../public/index.php">
                            <button data-toggle="button" aria-pressed="false" autocomplete="off" class="rounded btn btn-info btn-lg text-light">
                                My profile
                            </button>
                        </a>
                    </div>
                    
                    <!--MY PROFILE - COLUMN-->
                    <div class="col-sm-2 text-end">
                        <a href="link NOT WORKINK" >
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
                            <input type="hidden" name="r" value="mainPage">
                                <div class="row d-flex justify-content-center align-items-center m-4">
                                    <div class="col-sm-12">
                                        <input type="date" name="date" class="rounded form-control text-center" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 1 month')); ?>">
                                    
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center align-items-center m-4">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary col-sm-12">Next</button>
                                    </div>
                                </div>
                        </form>
                    



                            <div class="row"> 
    




                            </div> 
                       
                    </div>  
                    <!--LEFT - COLUMN-->
                    
                </div>
                <!--ROW - BOTTOM-->
                <div class="row g-0 justify-content-end"> <!--float-end-->
                    <!--COLUMN - RESEVES-->
                    <div class="box col-sm-12 rounded">
                        <div class="scrollmenu rounded">
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
                            </div> 
                            <div class="col-sm-3 p-3 m-3 rounded text-light reserves">
                                <p class="m-2">data de reserva:</p>
                                <p class="m-2">hora de reserva:</p>
                                <p class="m-2">carril reservat:</p>
                            </div> 
                        </div>          
                    </div> 
                </div>
            </div>
        </body>
        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>