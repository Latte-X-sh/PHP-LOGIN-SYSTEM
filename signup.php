<?php
require 'lib/functions.php'; //COPY AND PASTE CONTENT OF THAT PAGE HERE!

if($_SERVER['REQUEST_METHOD'] =='POST'){ //CLIENT AND SERVER CONNECTION
 
if(isset($_POST['name'])){
  $name=$_POST['name'];//if it has data then attached the value to the variable
}else {
  $name= ''; //else make the variable blank
}
if(isset($_POST['email'])){
  $email= $_POST['email'];
}else {
  $email='';
}
if(isset($_POST['Password'])){
  $password= $_POST['Password'];
}else {
  $password= '';
}
if(isset($_POST['ConfirmPassword'])){
  $confpassword= $_POST['ConfirmPassword'];
}else {
  $confpassword= '';
}
//  var_dump($_POST);die();
// var_dump($name,$email,$password, $confpassword);die();
$users=save_to_db($name,$email,$password); //calla function called save_to_db then attach the 3 variables
header('location:signin.php'); //redirects the user to the sign in page.
unset($pdo);//closes the connection
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <!-- form template -->
<main class="form-signin">
  <form method="POST" action="signup.php">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="LOGO" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Enter your details</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="name" id='name' placeholder="John Smith">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id='email' placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="Password" id='password' placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="ConfirmPassword" id='confirmpassword' placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
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
    <button class="w-20 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <button class="w-20 btn btn-lg btn-danger" type="reset" value="Reset">Reset</button>
    <!-- <input type="reset" class="btn btn-secondary ml-2" value="Reset"> -->
    <div class ="position-relative">
    <a href="signin.php">sign in </a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; Indigo Group <?php $date = date('Y'); echo $date; ?></p>
  </form>
</main>    
  </body>
 
</html>
