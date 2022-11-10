<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/date-1.1.2/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"/>
    
        <body class="p-2">
            <!--CONTAINER-->
            <div class="container rounded g-0 p-4 adminPageBody">
                <!--ROW - TOP-->
                <div class="row d-flex justify-content-between g-0 mb-4">
                    <!--MY PROFILE - COLUMN-->
                    <div class="col-sm-2">
                        <a href="index.php?r=profilePage" class="rounded btn btn-dark btn-lg">
                            My profile
                        </a>
                    </div>
                    
                    <!--MY PROFILE - COLUMN-->
                    <div class="col-sm-2 text-end">
                        <a href="index.php?r=destroySession" class="rounded btn btn-dark btn-lg">
                            Log out    
                        </a>
                    </div>
                </div>
                <!--ROW - MID-->
                <div class="row mb-5 g-0 justify-content-between adminPageMidContainer h-auto">

                    <!--LEFT - COLUMN-->
                    <div class="col-sm-3 rounded mid h-100">
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
                        <div class="row d-flex justify-content-center g-0">
                            <a href="index.php?r=adminPageUser" class="col-sm-10 btn d-flex justify-content-center rounded g-0 mb-3 p-3 configurations">
                                USERS
                            </a>
                        </div>
                    </div> 

                    <!--RIGHT - COLUMN-->
                    <div class="col-sm-8 rounded mid p-2">
                        <table class ="table table-striped" id = "taulaAdmin">
                            <thead>
                                <tr>
                                    <th scope="col" >USER</th>
                                    <th scope="col" >NAME</th>
                                    <th scope="col" >SURNAME</th>
                                    <th scope="col" >ADMIN</th>
                                    <th scope="col" >admin</th>
                                    <th scope="col" >reserves</th>
                                    <th class="col" >delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($users as $user) {
                                echo"
                                <tr>
                                    <td>".$user['client_email']."</td>
                                    <td>".$user['client_first_name']."</td>
                                    <td>".$user['client_second_name']."</td>
                                    <td>".$user['client_admin']."</td>
                                    <td>
                                        <a href='index.php?r=toggleAdmin&id=".$user['client_email']."&admin=".$user['client_admin']."' type = 'button' class='btn btn-danger btn-sm' id='".$user['client_email']."'>toggle</a>
                                    </td>
                                    <td>
                                        <a href='index.php?r=deleteUserRes&id=".$user['client_email']."' type = 'button' class='btn btn-danger btn-sm' id='".$user['client_email']."'>delete</a>
                                    </td>
                                    <td>
                                        <a href='index.php?r=deleteUser&id=".$user['client_email']."' type = 'button' class='btn btn-danger btn-sm' id='".$user['client_email']."'>X</a>
                                    </td>
                                </tr>
                                ";
                            }
                            ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </body>
        <!--Bootstrap JS-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.js"   integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="   crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/date-1.1.2/datatables.min.js"></script>        
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
        <script type="text/javascript" src="script.js"></script>

</html>