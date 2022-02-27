<?php
require 'lib/functions.php'; //COPY AND PASTE CONTENT OF THAT PAGE HERE!

if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['email'])){
$capturedEmail = $_POST['email'];
//function that checks if email exists
fetch_user_email($capturedEmail);
die();
}else{
$capturedEmail = '';
}



}


?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Moses Odalo">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Forgot Password</title>
 <link href="css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->
    <!-- Bootstrap core CSS -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
    <!-- Forgot Password section -->
        <div class ="my-banner">
        <h2>Forgot Password!</h2>
        </div>
        <div class="col-xs-1" align="center">
            <div class="container">
                <div class="container-my">
                    <form method="POST" action="forgotpassword.php">
                        <div class="row-my">
                            <h2 style="text-align:center">Enter your email to get a password reset link</h2>
                            <div class = "container mx-auto col-xl-6 col-sm-12">
                                <!-- alerts sections -->
                                <div class="alert alert-danger" id="CautionAlert">
                                    <strong>Caution!</strong> Please provide a valid email.
                                </div>
                                <div class="alert alert-danger" id="FailureAlert">
                                    <strong>Caution!</strong> The Email field is Empty.
                                </div>
                                <div class="alert alert-success" id="successAlert">
                                    <strong>Success!</strong> An email has been sent to your mail. <strong id='timer'>0</strong>s redirect.
                                </div>
                            </div>
                            <div class ="container">
                                <div class ="row">
                                    <div class="mx-auto mt-2 col-xl-6 col-xs-6">
                                        <label for="floatingInput">Email</label> 
                                        <input type="email" class="form-control"  id='emailinput' name="email" placeholder="johnsmith@email.com" required>
                                    </div>
                                </div>
                            </div>
                            <div class ="row">
                                <div class=" mx-auto col-xl-6 col-sm-6">
                                    <input type="submit" value="Reset Password" id="resetButton">
                                </div>
                            </div>     
                        </div>
                    </form>
                </div>
            </div>
            <p class="mt-5 mb-3 text-muted"><?php $date = date('Y'); echo $date; echo " "; ?>&copy; The Indigo Group. All Rights reserved</p>
        </div>
    </div>
</div>
<script>
//validation for the correct email input
let cautionAlert = document.getElementById("CautionAlert").style.display = "none";
let failureAlert = document.getElementById("FailureAlert").style.display = "none";
let successAlert = document.getElementById("successAlert").style.display = "none";
function EmailValidation(emailInput){
  const emailRegex =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(emailRegex.test(emailInput)){
      let cautionAlert = document.getElementById("CautionAlert").style.display = "none";
      let successAlert = document.getElementById("successAlert").style.display = "block";
      return emailInput;
     
  }else{
      if(emailInput == ''){
      let failureAlert = document.getElementById("FailureAlert").style.display = "block";
      }
      let failureAlert = document.getElementById("FailureAlert").style.display = "none";
      let cautionAlert = document.getElementById("CautionAlert").style.display = "block";
  } 
  }
//add event listener
let form = document.querySelector('form');
form.addEventListener('submit',(event)=>{
let emailData = document.getElementById('emailinput').value;
event.preventDefault();
let correctEmail = EmailValidation(emailData);

if(correctEmail !== ''){
    let timer = eval(document.getElementById('timer').innerHTML);
    setInterval(() => { 
    let update = document.getElementById('timer').innerHTML = timer++ ;
    setTimeout(() => {
    console.log('Successful submission')
    form.submit();
    }, 5000);
    console.log(timer);      
        }, 1000);
  
}


});


</script>

  </body>
</html>
