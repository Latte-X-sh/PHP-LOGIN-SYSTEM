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
$users=save_to_db($name,$email,$password); //call a function called save_to_db then attach the 3 variables
header('location:signin.php'); //redirects the user to the sign in page.
unset($pdo);//closes the connection
}

?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
   body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.my-banner{
  font-family: 'Aclonica';font-size: 22px;
}

/* style the container */
.container-my {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row-my:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
    </style>

    
    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class ="container pt-5" >
  <div class ="row">
    <div class ="my-banner">
  <h2>Register here!</h2>
</div>
    <div class="col-xs-1" align="center">

<div class="container">
<div class="container-my">
  <form method="POST" action="signup-2.php">
    <div class="row-my">
      <h2 style="text-align:center">Enter your Details</h2>
      <!-- <div class="vl">
        <span class="vl-innertext">or</span>
      </div> -->
      <div class ="container">
      <div class ="row">
        <div class="mx-auto mt-2 col-xl-6 col-xs-6">
          <label for="floatingInput ">Name</label>      
          <input type="text"  placeholder="John Smith" id="nme" name='name' required><br><br>
          <label for="floatingInput">Email</label> 
          <input type="email" class="form-control"  id='emailinput' name="email" placeholder="johnsmith@email.com" required>
        </div>
        <div class =" mx-auto mt-2 col-xl-6 col-xs-6 " >
        <label for="floatingPassword">Password</label>      
        <input type="password"  placeholder="Password" id="pwd" name='Password' required><br><br>
        <label for="floatingPassword">Confirm Password</label> 
        <input type="password" class="form-control" name="ConfirmPassword" id='confirmpassword' placeholder="Confirm Password" required>
        </div>
   
    </div>
  </div>
  <div class ="row">
      <div class=" mx-auto col-xl-10 col-sm-7">
        <div class="hide-md-lg">
          <p>Or sign up manually:</p>
        </div>
      
<script>
// function myFunction() {
//   var x = document.getElementById("myInput");
//   if (x.type === "passwordinput") {
//     x.type = "text";
//   } else {
//     x.type = "passwordinput";
//   }
// }
</script>

        <input type="submit" value="Register">
      </div>
      <!-- reset button -->
      <div class =" mx-auto col-xl-1 col-sm-3">
        <button class="w-20 btn btn-lg btn-danger" type="reset" value="Reset">Reset</button>
      </div> 
    </div>     
    </div>
  </form>
</div>
</div>

<div class="bottom-container">
  <div class="row-my">
    <div class="col">
      <a href="signin.php" style="color:white" class="btn">Already have an account?Sign in</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
<p class="mt-5 mb-3 text-muted"><?php $date = date('Y'); echo $date; echo " "; ?>&copy; The Indigo Group. All Rights reserved</p>
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
    <p class="mt-5 mb-3 text-muted">&copy; Indigo Group <?php //echo $date['month']; echo ' ' ; echo $date['year']; ?></p>
  </form>
</main> -->


    
  </body>
</html>
