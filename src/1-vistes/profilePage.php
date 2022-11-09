<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles.css">

    <body class = "">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 90vh">
                <div class="col-11 col-sm-11 col-md-10 col-lg-9 col-xl-8 col-xxl-7 border rounded" >
                    <form action="index.php" method="post" class="mx-3">
                    <input type="hidden" name="r" value="actualitzarDades">
                        <div class="row">
                            <div class="col-md-12 mt-5">Piscina de Peralada</div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3 mb-5 SignUpTitle TitleAccount">Modify your Piscina de Peralada Account</div>
                        </div>

                        <div id="i">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First name" name="firstName"                   class="form-control">
                                    <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="correuID"> -->
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Second name" name="secondName"                 class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4">

                                <div class="col-md-6">
                                    <input type="password" placeholder="New Password" name="password" id="password"    class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <input type="password" placeholder="Confirm New Password" name="confirm"    id="confirm"   class="form-control">
                                </div>
                                
                            </div>


                            <div class="row">
                                <div class="col-md-12 ms-3">
                                    <input type="checkbox" name="showPassword" onclick="togglePassword()">
                                    <label id="etiquetaShowPassword" for="showPassword">Show password</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-1" id="alertPassword">
                                <div class="alert alert-danger" role="alert" id="alertPassword">The passwords not match</div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mt-4 mb-4">
                                <div class="col-6 col-sm-6 col-md-6 SignIntButtonSignUp">
                                    <!-- <input type="button" value="Sign in instead" name="singIn"                              class="btn text-primary"> -->
                                    <!-- <button type="button" class="btn text-primary">Discard changes</button> -->
                                    <a class="btn text-primary" href="index.php?r=actualitzarDades">Discard changes</a>

                                </div>
                                <div class="col-6 col-sm-6 col-md-6 NextButtonSignUp">
                                    <!-- <input type="submit" value="Next" name="next"                                           class="btn btn-primary"> -->
                                    <!-- vigilar amb el text end ja que quan es torna en mida telefon mobil l'alinea de totes maneres a la dreta i queda mal soci -->
                                    <button type="submit" class="btn btn-primary" id="submit">Save changes</button>

                                </div>    
                         </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
    </body>
</html> 