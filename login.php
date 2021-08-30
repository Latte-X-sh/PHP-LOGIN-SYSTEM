<?php
//initialize the session
session_start();
//checked if the user is already logged in and if so redirect
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header('location:index.php');
    exit;
}
//we want to read from our db and verify if the data we receive is true.
require 'lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $password = '';
    $email = '';

    if (isset($_POST['emailinput'])) {
        //if those particular arrays exist then assign the appropriate variables their values.
        $email = $_POST['emailinput'];
    }

    if (isset($_POST['passwordinput'])) {
        $password = $_POST['passwordinput'];
    }

    login_db($email, $password);

}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Moses Odalo">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom/signin.css" rel="stylesheet">


</head>

<body>

<div class="container mt-5 pt-5">
    <div class="row mt-5">
        <div class="my-banner mt-5">
            <h2>Login here please</h2>
        </div>
        <div class="col-xs-1" align="center">


            <div class="container-my">
                <form method="POST" action="signin.php">
                    <div class="row-my">
                        <h2 style="text-align:center">Login</h2>
                        <div class="vl">
                            <span class="vl-innertext">or</span>
                        </div>

                        <div class="col">
                            <a href="#" class="fb btn">
                                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                            </a>
                            <a href="#" class="twitter btn">
                                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                            </a>
                            <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                                </i> Login with Google+
                            </a>
                        </div>

                        <div class="col">
                            <div class="hide-md-lg">
                                <p>Or sign in manually:</p>
                            </div>
                            <input type="email" class="form-control" name='emailinput' id="myInput"
                                   placeholder="name@example.com"  required />

                            <input type="password" placeholder="Password" id="pwd" name='passwordinput'
                                   title="Must contain at least 8 or more characters"
                                   required  />
                            <br><br>

                            <input type="submit" value="Login"/>
                        </div>

                    </div>
                </form>
            </div>

            <div class="bottom-container">
                <div class="row-my">
                    <div class="col">
                        <a href="signup-2.php" style="color:white" class="btn">Sign up</a>
                    </div>
                    <div class="col">
                        <a href="#" style="color:white" class="btn">Forgot password?</a>
                    </div>
                </div>
            </div>
            <p class="mt-5 mb-3 text-muted">The Indigo Group. All Rights reserved  &copy;   <?php  echo date("Y"); ?> </p>
        </div>
    </div>
</div>


<script >

    console.log("JS RUNIN")
    // selecting the inputs
    const mailInput = document.querySelector('#myInput');
    const passInput = document.querySelector('#pwd');


    mailInput.addEventListener('change', validateEmail)
    passInput.addEventListener('change', validatePassword)

    //function to add div after another in dom
    function insertAfter(newElement, referenceElement) {
        referenceElement.parentNode.insertBefore(newElement, referenceElement.nextSibling);
    }


    //creating an error div
    errorElement = document.createElement("div");
    // adding an error class to div
    errorElement.className = "error";


    //email validation function
    function validateEmail(){

        let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (!mailInput.value.match(validRegex)) {

            mailInput.style.borderColor = 'red'
            errorElement.innerHTML = "Invalid Email";
            errorElement.classList.add("email-error")
            insertAfter(errorElement, mailInput);

        } else {
            document.querySelector('.email-error') && document.querySelector('.email-error').remove();
        }

    }


    //password validation function
    function validatePassword(){

        if (passInput.value.length < 8) {

            passInput.style.borderColor = 'red'
            errorElement.innerHTML = "Password Has to be  8 or more characters;
            errorElement.classList.add("pass-error")
            insertAfter(errorElement, passInput);

        } else {
            document.querySelector('.pass-error') && document.querySelector('.pass-error').remove();
        }

    }


</script>
</body>
</html>
