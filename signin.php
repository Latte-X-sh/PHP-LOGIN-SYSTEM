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
$date = getdate(); //footer date -will be moved to the footer section.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['emailinput'])) { //if those particular arrays exist then assign the appropriate variables their values.
        $email = $_POST['emailinput'];
    } else {
        $email = '';
    }
    if (isset($_POST['passwordinput'])) {
        $password = $_POST['passwordinput'];
    } else {
        $password = '';
    }
    login_db($email, $password);
    // var_dump($password , $email);die();
}
// if(isset($_POST['']))

// var_dump($date);die();


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/indigo.png">
    <meta name="description" content="">
    <meta name="author" content="Moses Odalo">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom/signin.css" rel="stylesheet">


</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container pt-5">
    <div class="row">
        <div class="my-banner">
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
                                   placeholder="name@example.com"  required onchange="validateEmail()" />

                            <input type="password" placeholder="Password" id="pwd" name='passwordinput'
                                   title="Must contain at least 8 or more characters"
                                   required onchange="validatePassword()" />
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
            <p class="mt-5 mb-3 text-muted"><?php  echo $date['year']. " "; ?>&copy; The Indigo Group. All Rights reserved</p>
        </div>
    </div>
</div>
<!-- <main class="form-signin">
  <form method="POST" action="signin.php">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="LOGO" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name='emailinput' id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name='passwordinput' id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class ="container">
      <div class ="row">
        <div class ="col-xs-12 col-sm-6">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    </div>
    </div>
    </div>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <div class ="position-relative">
    <a href="signup.php">sign up </a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; Indigo G</p>
  </form>
</main> -->


<script type="text/javascript">


    // by shera


    // selecting the inputs
    const mailInput = document.querySelector('#myInput');
    const passInput = document.querySelector('#pwd');


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

        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

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


    // end by shera

    // function myFunction() {
    //     var x = document.getElementById("myInput");
    //     if (x.type === "passwordinput") {
    //         x.type = "text";
    //     } else {
    //         x.type = "passwordinput";
    //     }
    // }
</script>
</body>
</html>
