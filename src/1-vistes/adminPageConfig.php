<!doctype html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- text/css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

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
            <!--MAIN PAGE-->
            <div class="col-sm-2">
                <a href="index.php?r=mainPage" class="rounded btn btn-dark btn-lg ml-2 text-light">
                    Main Page
                </a>
            </div>
            <!--LOGOUT- COLUMN-->
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
                <!--TAB - ROW-->
                <div class="row d-flex justify-content-center g-0">
                    <a href="index.php?r=adminPageRes" class="col-sm-10 btn d-flex justify-content-center rounded g-0 mt-3 p-3 configurations">
                        RESERVES
                    </a>
                </div>
                <!--TAB - ROW-->
                <div class="row d-flex justify-content-center g-0">
                    <a href="index.php?r=adminPageConfig" class="col-sm-10 btn d-flex justify-content-center rounded g-0 m-3 p-3 configurations">
                        CONFIGS
                    </a>
                </div>
                <!--TAB - R0W-->
                <div class="row d-flex justify-content-center g-0">
                    <a href="index.php?r=adminPageBlock" class="col-sm-10 btn d-flex justify-content-center rounded g-0 mb-3 p-3 configurations">
                        BLOCK DATES
                    </a>
                </div>
                <!--TAB - ROW-->
                <div class="row d-flex justify-content-center g-0">
                    <a href="index.php?r=adminPageUser" class="col-sm-10 btn d-flex justify-content-center rounded g-0 mb-3 p-3 configurations">
                        USERS
                    </a>
                </div>
            </div>

            <!--RIGHT - COLUMN-->
            <div class="col-sm-8 rounded mid">
                <!--FORM - BLOCKED DATES-->
                <form method="POST" action="index.php" class="row g-0">
                    <!--R VALUE-->
                    <input type="hidden" name="r" value="timeConfigs">
                    <!--CONTAINER - COLUMN-->
                    <div class="col-sm-12">
                        <!--CONTAINER TITLE - ROW-->
                        <div class="row g-0">
                            <div class="col-sm-12 p-3">
                                <h2 class="text-center">CONFIGURATIONS</h2>
                            </div>
                        </div>
                        <!--CONTAINER BODY - ROW-->
                        <?php foreach ($times as $day) { ?>
                            <div class="row g-0 mb-3">
                                <div class="col-sm-4 justify-content-center text-start px-4 daycolumn">
                                    <?= $day['horari_dia']; ?>
                                </div>
                                <div class="col-sm-3">
                                    <input type="time" name="start<?= $day['horari_dia']; ?>" class="form-control text-center hourinput" value="<?= $day['horari_hora_obert'] ?>">
                                </div>
                                <div class="col-sm-3">
                                    <input type="time" name="end<?= $day['horari_dia']; ?>" class="form-control text-center hourinput" value="<?= $day['horari_hora_tencat'] ?>">
                                </div>
                                <div class="col-sm-2 py-2">
                                    <input type="checkbox" name="closed<?= $day['horari_dia']; ?>" class="align-middle" 
                                        <?php if ($day['horari_tencat'] == 1) {echo "checked";} ?>
                                    >
                                    <label for="closed<?= $day['horari_dia']; ?>">Closed</label>
                                </div>
                            </div>
                        <?php } ?>
                        <!--CONTAINER APPLY CHANGES - ROW-->
                        <div class="row g-0">
                            <div class="col-sm-12 p-3 NextButtonSignUp">
                                <input type="submit" class="btn btn-primary" value="Apply changes">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<!--text/javascript-->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>