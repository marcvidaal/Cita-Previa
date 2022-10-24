<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <body class = "">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 90vh">
                <div class="col-11 col-sm-11 col-md-10 col-lg-9 col-xl-8 col-xxl-7 border rounded" >
                    <form action="index.php" method="POST" class="mx-3">
                        <input type="hidden" name="r" value="signup">
                        <div class="row">
                            <div class="col-md-12 mt-5">Piscina de Peralada</div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3 mb-5 SignUpTitle TitleAccount">Create your Piscina de Peralada Account</div>
                        </div>

                        <div id="i">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First name" name="firstName" required                   class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Second name" name="secondName" required                 class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <input type="email" placeholder="Email" name="email" required                           class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4">

                                <div class="col-md-6">
                                    <input type="password" placeholder="Password" name="password" id="password" required    class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <input type="password" placeholder="Confirm" name="confirm" required                    class="form-control">
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-12 ms-3">
                                    <input type="checkbox" name="showPassword" onclick="togglePassword()">
                                    <label id="etiquetaShowPassword" for="showPassword">Show password</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mt-4 mb-4">
                                <div class="col-6 col-sm-6 col-md-6 SignIntButtonSignUp">
                                    <a href="index.php"  class="btn text-primary" >Sign in instead</a>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 NextButtonSignUp">
                                    <a href="index.php?r=createuser"  class="btn btn-primary" >Next</a>
                                </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>
