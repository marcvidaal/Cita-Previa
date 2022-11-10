<html lang="en">

<head>
    <title>PISCINA DE PERELADA</title>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- text/css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <!--CONTAINER-->
        <div class="row d-flex justify-content-center align-items-center">
            <!--ROW - FORM CONTAINER-->
            <div class="col-10 col-sm-10 col-md-8 col-lg-6 col-xl-4 rowFormulari rounded border">
                <!--FORM - SIGN IN-->
                <form class="form-container" action="index.php" method="post">
                    <!--R VALUE-->
                    <input type="hidden" name="r" value="login">
                    <!--HEADER- CONTRAINER-->
                    <div class="text-center">
                        <!--HEADER-->
                        <div class="row">
                            <div class="col-md-12 mt-5">Piscina de Peralada</div>
                        </div>
                        <!--SIGN IN-->
                        <div class="row">
                            <div class="col-md-12 mb-5 SignInTitle">Sign in</div>
                        </div>
                        <!--SUBHEADER-->
                        <div class="row">
                            <div class="col-md-12 mb-4">Use your Piscina de Peralada account</div>
                        </div>
                    </div>
                    <!--ROW - EMAIL-->
                    <div class="row">
                        <div class="col-9 col-md-9 mx-auto">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="correuID">
                        </div>
                    </div>
                    <!--ROW - PASSWORD-->
                    <div class="row">
                        <div class="col-9 col-md-9 mx-auto mt-2">
                            <input type="password" class="form-control" placeholder="Password" name="contrasenyaSignIn" id="password">
                        </div>
                    </div>
                    <!--PASSWORD - SHOW PASSWORD-->
                    <div class="row">
                        <div class="col-md-12 ms-5 ps-4 mt-3">
                            <input type="checkbox" name="showPassword" onclick="togglePassword()">
                            <label id="etiquetaShowPasswordSignIn" for="showPassword">Show password</label>
                        </div>
                    </div>
                    <!--ROW - BOT-->
                    <div class="row mt-4 mb-4 ms-4 me-4">
                        <!--ROW - SIGN IN BUTTON-->
                        <div class="col-6 col-sm-6 col-md-6 CreateAccountButtonSignIn">
                            <a href="index.php?r=signup" class="btn text-primary CreateAccountButtonSignIn">
                                Create account
                            </a>
                        </div>
                        <!--ROW - NEXT-->
                        <div class="col-6 col-sm-6 col-md-6 NextButtonSignIn">
                            <button type="submit" class="btn btn-primary nextButton NextButtonSignIn">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<!--text/javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>