<!doctype html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- text/css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="">
    <div class="container">
        <!--CONTAINER-->
        <div class="row d-flex justify-content-center align-items-center" style="height: 90vh">
            <div class="col-11 col-sm-11 col-md-10 col-lg-9 col-xl-8 col-xxl-7 border rounded">
                <form action="index.php" method="POST" class="mx-3">
                    <!--R VALUE-->
                    <input type="hidden" name="r" value="createuser">
                    <!--ROW - FORM NAME-->
                    <div class="row">
                        <div class="col-md-12 mt-5">Piscina de Peralada</div>
                    </div>
                    <!--ROW - SUBHEADER-->
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-5 SignUpTitle TitleAccount">Create your Piscina de Peralada Account</div>
                    </div>
                    <!--ROW - MID-->
                    <div id="i">
                        <div class="row mb-4">
                            <!--FORM - NAME-->
                            <div class="col-md-6">
                                <input type="text" placeholder="First name" name="firstName" required class="form-control">
                            </div>
                            <!--FORM - SURNAME-->
                            <div class="col-md-6">
                                <input type="text" placeholder="Second name" name="secondName" required class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <!--FORM - EMAIL-->
                            <div class="col-md-12">
                                <input type="email" placeholder="Email" name="email" required class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <!--FORM - PASSWORD-->
                            <div class="col-md-6">
                                <input type="password" placeholder="Password" name="password" id="password" required class="form-control">
                            </div>
                            <!--FORM - CONFIRM-->
                            <div class="col-md-6">
                                <input type="password" placeholder="Confirm" name="confirm" id="confirm" required class="form-control">
                            </div>
                        </div>
                        <!--PASSWORD - SHOW PASSWORD-->
                        <div class="row">
                            <div class="col-md-12 ms-3">
                                <input type="checkbox" name="showPassword" onclick="togglePassword()">
                                <label id="etiquetaShowPassword" for="showPassword">Show password</label>
                            </div>
                        </div>
                        <!--ALERT - UNMATCHED PASSWORDS-->
                        <div class="row">
                            <div class="col-md-12 mt-1" id="alertPassword">
                                <div class="alert alert-danger" role="alert" id="alertPassword">The passwords not match</div>
                            </div>
                        </div>
                    </div>
                    <!--ROW - BOTTOM-->
                    <div class="row mt-4 mb-4">
                        <!--BUTTON - DISCARD-->
                        <div class="col-6 col-sm-6 col-md-6 SignIntButtonSignUp">
                            <a href="index.php" class="btn text-primary">Sign in instead</a>
                        </div>
                        <!--BUTTON - SAVE CHANGES-->
                        <div class="col-6 col-sm-6 col-md-6 NextButtonSignUp">
                            <button type="submit" class="btn btn-primary" id="submit">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<!--text/javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="script.js"></script>

</html>