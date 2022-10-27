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
                        <form method="POST" acction="index.php" class="row g-0">
                            <div class="col-sm-12">
                                <div class="row g-0">
                                    <div class="col-sm-12 p-3">
                                        <h2 class="text-center">CONFIGURATIONS</h2>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                        monday
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-2 py-2">
                                        <input type="checkbox" name="tencatMonday" class="align-middle">
                                        <label for="tencatMonday">Closed</label>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                        tuesday
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-2 py-2">
                                        <input type="checkbox" name="tencatMonday" class="align-middle">
                                        <label for="tencatMonday">Closed</label>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                        wednesday
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-2 py-2">
                                        <input type="checkbox" name="tencatMonday" class="align-middle">
                                        <label for="tencatMonday">Closed</label>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                        thursday
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-2 py-2">
                                        <input type="checkbox" name="tencatMonday" class="align-middle">
                                        <label for="tencatMonday">Closed</label>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                        friday
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-2 py-2">
                                        <input type="checkbox" name="tencatMonday" class="align-middle">
                                        <label for="tencatMonday">Closed</label>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                        saturday
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-2 py-2">
                                        <input type="checkbox" name="tencatMonday" class="align-middle">
                                        <label for="tencatMonday">Closed</label>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                        sunday
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" name="iniciMonday" class="form-control text-center hourinput " >
                                    </div>
                                    <div class="col-sm-2 py-2">
                                        <input type="checkbox" name="tencatMonday" class="align-middle">
                                        <label for="tencatMonday">Closed</label>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-sm-12 p-3 NextButtonSignUp">
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </body>
        <!--Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>