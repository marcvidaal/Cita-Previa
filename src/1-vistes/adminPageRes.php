<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script   src="https://code.jquery.com/jquery-3.6.1.js"   integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="   crossorigin="anonymous"></script>
    </head>
    
        <body class="p-2">
            <!--CONTAINER-->
            <div class="container rounded g-0 p-4 adminPageBody">
                <!--ROW - TOP-->
                <div class="row d-flex justify-content-between g-0 mb-4">
                    <!--MY PROFILE - COLUMN-->
                    <div class="col-sm-2">
                        <a href="  " class="rounded btn btn-dark btn-lg">
                            My profile
                        </a>
                    </div>
                    
                    <!--MY PROFILE - COLUMN-->
                    <div class="col-sm-2 text-end">
                        <a href="  " class="rounded btn btn-dark btn-lg">
                            Log out    
                        </a>
                    </div>
                </div>
                <!--ROW - MID-->
                <div class="row mb-5 g-0 justify-content-between adminPageMidContainer h-auto">

                    <!--LEFT - COLUMN-->
                    <div class="col-sm-4 rounded mid h-100">
                        <div class="row d-flex justify-content-center g-0">
                            <a href="index.php?r=adminPageRes" class="col-sm-10 btn d-flex justify-content-center rounded g-0 mt-3 p-3 configurations">
                                RESERVES
                            </a>
                        </div>
                        <div class="row d-flex justify-content-center g-0">
                            <a href="index.php?r=adminPageConfig" class="col-sm-10 btn d-flex justify-content-center rounded g-0 m-3 p-3 configurations">
                                CONFIGS
                            </a>
                        </div>
                        <div class="row d-flex justify-content-center g-0">
                            <a href="index.php?r=adminPageBlock" class="col-sm-10 btn d-flex justify-content-center rounded g-0 mb-3 p-3 configurations">
                                BLOCK DATES
                            </a>
                        </div>
                    </div> 

                    <!--RIGHT - COLUMN-->
                    <div class="col-sm-7 rounded mid">
                        <table class ="table" id = "taulaAdmin">
                            <thead>
                                <tr>
                                    <th scope="col" >#</th>
                                    <th scope="col" >EMAIL</th>
                                    <th scope="col" >HORA ENTRADA</th>
                                    <th scope="col" >HORA SORTIDA</th>
                                    <th class="col" >CARRIL</th>
                                    <th class="col" ></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($reserves as $reserva) {
                                echo "<tr>";
                                    echo "<td>".$reserva["reserva_id"]."</td>";
                                    echo "<td>".$reserva["reserva_client_email"]."</td>";
                                    echo "<td>".$reserva["reserva_data_entrada"]."</td>";
                                    echo "<td>".$reserva["reserva_data_sortida"]."</td>";
                                    echo "<td>".$reserva["carril_numero"]."</td>";
                                    echo "<td><button type = 'button' class='btn btn-danger btn-sm' id='".$reserva["reserva_id"]."'>eliminar</button></td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </body>
        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</html>