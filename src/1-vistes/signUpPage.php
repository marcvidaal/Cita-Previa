<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles.css">

    <body class = "d-flex justify-content-center" >
        <div class="border border rounded ">
            <form action="index.php" method="post">
                <div id="h">
                    <p>Piscina de Peralada</p>
                    <p>Create your Piscina de Peralada Account</p>
                </div>
                <div id="i">
                    <div class="r">
                        <input type="text" placeholder="First name" name="firstName" required                   class="rounded border">
                        <input type="text" placeholder="Second name" name="secondName" required                 class="rounded border">
                    </div>
                    <div class="r">
                        <input type="email" placeholder="Email" name="email" required                           class="rounded border w-100 p-3">
                    </div>
                    <div class="r">
                        <input type="password" placeholder="Password" name="password" id="password" required    class="rounded border">
                        <input type="password" placeholder="Confirm" name="confirm" required                    class="rounded border">
                    </div>
                    <div class="r">
                        <input type="checkbox" name="showPassword" onclick="togglePassword()">
                        <label id="etiquetaShowPassword" for="showPassword">Show password</label>
                    </div>
                    <div class="r">
                        <input type="button" value="Sign in instead" name="singIn"                              class="rounded border">
                        <input type="submit" value="Next" name="next"                                           class="rounded border float-right text-white next">
                    </div>
                </div>
            </form>
        </div>
        <script src="../public/system.js"></script>
    </body>
</html> 