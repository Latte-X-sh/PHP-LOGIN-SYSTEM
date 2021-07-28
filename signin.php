<?php
//initialize the session
session_start();
//checked if the user is already logged in and if so redirect
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header('location:index.php');
  exit;
}
//we want to read from our db and verify if the data we receive is true. 
require 'lib/functions.php';
$date =getdate(); //footer date -will be moved to the footer section.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['emailinput'])){ //if those particular arrays exist then assign the appropriate variables their values.
    $email = $_POST['emailinput'];
  }else{
    $email = '';
  }
  if(isset($_POST['passwordinput'])){
    $password = $_POST['passwordinput'];
  }else{
    $password = '';
  }
  login_db($email,$password);
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
    <meta name="description" content="">
    <meta name="author" content="Moses Odalo">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
 

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
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
    <p class="mt-5 mb-3 text-muted">&copy; Indigo Group <?php echo $date['month']; echo ' ' ; echo $date['year']; ?></p>
  </form>
</main>


    
  </body>
</html>
