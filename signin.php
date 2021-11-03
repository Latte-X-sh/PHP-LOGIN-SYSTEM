<?php
//initialize the session
session_start();
//google api
require_once "vendor/autoload.php";
$clientID = '576932485941-eoaeksl3objol9q6gcnbbcnfvbq9r8mr.apps.googleusercontent.com';
$clientSecret ='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';
$redirectUrl ="http://localhost/login%20module/signin.php";
//create a client request to google
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code'])){

$token= $client->fetchAccessTokenWithAuthCode($_GET['code']);
$client->setAccessToken($token);
//new user data getting
$gauth = new Google_Service_Oauth2($client);
$google_info = $gauth->userinfo->get();
$email = $google_info->email;
$name =  $google_info->name;
$photo = $google_info->picture;
$location = $google_info->locale;
var_dump($email,$name,$photo.$location);//gets data ..now to store in db and authenticate
die();
}else{
    $Googledata = $client->createAuthUrl();

}





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
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="Moses Odalo">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Page</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/custom/signin.css" rel="stylesheet">




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
                <form method="POST" action="signin.php" id='login'>
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

                            <a href="<?php echo $Googledata?>" class="google btn"><i class="fa fa-google fa-fw">
                                </i> Login with Google
                            </a>

                            <!-- Google api link
                            <script src="https://accounts.google.com/gsi/client" async defer></script>
                            <!-- Google Button sign in -->
                                    <!-- <div id="g_id_onload"
                                                data-client_id="576932485941-eoaeksl3objol9q6gcnbbcnfvbq9r8mr.apps.googleusercontent.com"
                                                data-context="signin"
                                                data-ux_mode="redirect"
                                                data-login_uri="https://127.0.0.1/login%20module/signin.php"
                                                data-auto_prompt="false">
                                    </div> -->

                                        <!-- <div class="g_id_signin"
                                            data-type="standard"
                                            data-shape="pill"
                                            data-theme="filled_black"
                                            data-text="signin_with"
                                            data-size="large"
                                            data-logo_alignment="left"
                                            data-width="458">
                                        </div> --> 
                            
                        </div>

                        <div class="col">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="OopsAlert">
                                <strong>Invalid!</strong> Password and Email Combination.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="closebtn">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-danger" id="CautionAlert">
                                <strong>Caution!</strong> Please provide a valid email.
                            </div>
                            <div class="alert alert-danger" id="CautionEAlert">
                                <strong>Caution!</strong> Please provide an email.
                            </div>
                            <input type="email" class="form-control" name='emailinput' id="myInput"
                                   placeholder="Email"   /> 
                            <div class="alert alert-danger" id="CautionPAlert">
                                <strong>Caution!</strong> Please provide a password .
                            </div>  
                            <input type="password" placeholder="Password" id="pwd" name='passwordinput'
                                   autocomplete='off'
                                    />
                             <small></small>
                            <br><br>

                            <input type="submit" value="Login" id="loginBtn"/>
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

<script type="text/javascript">
let CautionEmail = document.getElementById('CautionAlert').style.display ="none";
let CautionEmptyEmail = document.getElementById('CautionEAlert').style.display ="none";
let CautionPassword = document.getElementById('CautionPAlert').style.display ="none";
let alertclose = document.getElementById("closebtn").addEventListener("click", function (){
    let opsAlert = document.getElementById('OopsAlert').style.display ="none";
}); 
let currentLocation = window.location.href;
    let urlLocation = currentLocation.slice(45);
    if( urlLocation == 'Invalid%20email%20or%20password.'){
        let opsAlert = document.getElementById('OopsAlert').style.display ="block";
        console.log(urlLocation+'good');
    }else{
        let opsAlert = document.getElementById('OopsAlert').style.display ="none";
    }



function EmptyValue(input) {
	if (input === "") {
		let CautionPassword = document.getElementById('CautionPAlert').style.display ="block";
	}else{
        let CautionPassword = document.getElementById('CautionPAlert').style.display ="none";
        return input;
    }
}

function validateEmail(input) {
// validate email format
const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if(input === ""){
    let CautionEmptyEmail = document.getElementById('CautionEAlert').style.display ="block";
  }else{
    let CautionEmptyEmail = document.getElementById('CautionEAlert').style.display ="none";
	if (emailRegex.test(input)) {
        let CautionEmail = document.getElementById('CautionAlert').style.display ="none";
    return input;
	}else{
        let CautionEmail = document.getElementById('CautionAlert').style.display ="block";
    }
   
}
  }

	
const form = document.querySelector("form");

form.addEventListener("submit", function (event) {
const iEmail = document.getElementById('myInput').value.trim();
const iPassword = document.getElementById('pwd').value.trim();
	// stop form submission
event.preventDefault();
	// validate the form
	let PassValid = EmptyValue(iPassword);
	let emailValid = validateEmail(iEmail);
console.log(PassValid,emailValid);
	// if valid, submit the form.
	if (PassValid && emailValid) {
		form.submit();
	}
    
});


</script>
</body>
</html>
