<?php
require 'lib/functions.php'; //COPY AND PASTE CONTENT OF THAT PAGE HERE!
$data = fetch_dbUsername();
$dataSize = sizeof($data);
$dataJSON = json_encode($data);
if($_SERVER['REQUEST_METHOD'] =='POST'){ //CLIENT AND SERVER CONNECTION
// var_dump($dataJSON); //
// die();

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
  <div class ="col-12">
    <div class="alert alert-success" id="SuccessAlert">
            <strong>Succes!</strong> All data has been submitted successfully.
        </div>
        <div class="alert alert-danger" id="FailureAlert">
            <strong>Failure!</strong> Empty field.
        </div>
        <div class="alert alert-dark" id="CautionAlert">
            <strong>Caution!</strong> Please provide a valid email.
        </div>
        <div class="alert alert-primary" id="Pwd8Alert">
            <strong>Warning!</strong> Passwords should contain atleast 8 characters.
        </div>
        <div class="alert alert-primary" id="Pwd8info">
            <strong>Warning!</strong> Passwords should contain atleast a digit.
        </div>
        <div class="alert alert-primary" id="PwdSymbolAlert">
            <strong>Warning!</strong> Passwords should contain atleast a symbol @#.
        </div>
        <div class="alert alert-primary" id="PwdUpperAlert">
            <strong>Warning!</strong> Passwords should contain atleast an UpperCase character.
        </div>
        <div class="alert alert-primary" id="PwdLowerAlert">
            <strong>Warning!</strong> Passwords should contain atleast an LowerCase character.
        </div>
        <div class="alert alert-primary" id="PwdconfAlert">
            <strong>Warning!</strong> Passwords do not match.
        </div>
        <div class="alert alert-warning" id="UnameAlert">
            <strong>Oops!</strong> Username already exists.
        </div>
        <div class="alert alert-warning" id="UnamePassAlert">
            <strong>Oops!</strong> Choose a stronger Username,the one selected contains some bits of your password.
        </div>
</div>
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
          <label for="floatingInput ">User Name</label>      
          <input type="text"  placeholder="John Smith" id="nme" name='name' required><br><br>
          <label for="floatingInput">Email</label> 
          <input type="email" class="form-control"  id='emailinput' name="email" placeholder="johnsmith@email.com" required>
        </div>
        <div class =" mx-auto mt-2 col-xl-6 col-xs-6 " >
          <div class="container">
            <div class=" row">
          
        <label for="floatingPassword">Password</label>  
        <div class ="col-10">    
        <input type="password"  placeholder="Password" id="pwd" name='Password' required><br><br>
              </div>
        <div class ="col-2 mx-auto  py-3 ">
              <i class="bi bi-eye-slash" id='togglePassword'></i>
        </div>
            </div>
          </div>
          <div class ="container">
        <label for="floatingPassword">Confirm Password</label> 
        <input type="password" class="form-control" id='confirmpassword' name="ConfirmPassword"  placeholder="Confirm Password" required>
      </div>
      </div>
   
    </div>
  </div>
  <div class ="row">
      <div class=" mx-auto col-xl-10 col-sm-7">
        <div class="hide-md-lg">
          <p>Or sign up manually:</p>
        </div>
        <input type="submit" value="Register" id="signupBtn">
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
<script lang="javascript">
  //defining the alert variables
   let successAlert = document.getElementById("SuccessAlert").style.display = "none";
   let failureAlert = document.getElementById("FailureAlert").style.display = "none";
   let cautionAlert = document.getElementById("CautionAlert").style.display = "none";
   let pwd8alert = document.getElementById("Pwd8Alert").style.display = "none";
   let pwdSymblalert = document.getElementById("PwdSymbolAlert").style.display = "none";
   let pwdUpperAlert = document.getElementById("PwdUpperAlert").style.display = "none";
   let pwdLowerAlert = document.getElementById("PwdLowerAlert").style.display = "none";
   let pwdconfAlert = document.getElementById("PwdconfAlert").style.display = "none";
   let unameAlert = document.getElementById("UnameAlert").style.display= "none";
   let UnamePassAlert = document.getElementById("UnamePassAlert").style.display= "none";
   let pwddigitAlert = document.getElementById("Pwd8info").style.display= "none";
   //UnamePassAlert
   const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pwd');
  const ConfirmPasswordpwd = document.querySelector('#confirmpassword');
  //Password toggle function
  togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      const type2 = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      ConfirmPasswordpwd.setAttribute('type', type2);
      // toggle the eye / eye slash icon
      this.classList.toggle('bi-eye');
  });
  //define functions
  function PasswordValidation(Password,ConfirmPassword){
      const PasswordSymbols = /(?=.*[!@#\$%\^\&*\)\(+=.,_-])/g; //any combination with the follwing content of the word sad will return true
      const PasswordLength = /(?=.{8,})/;
      const PasswordsmallCase =/(?=.*[a-z])/;
      const PasswordUpperCase = /(?=.*[A-Z])/;
      const PasswordDigits = /(?=.*[0-9])/;
      //define an array that will allow me to validate the password
      let validArray = [];
      if(Password == ConfirmPassword){
          // if(Password == ''){
          // // let failureAlert = document.getElementById("FailureAlert").style.display = "block";
          // }
        let pwdconfAlert = document.getElementById("PwdconfAlert").style.display = "none";
          if(PasswordLength.test(Password)){
          let pwd8alert = document.getElementById("Pwd8Alert").style.display = "none";
         validArray.push('Password pass1')
          }else{
              let pwd8alert = document.getElementById("Pwd8Alert").style.display = "block";
          }
          if(PasswordSymbols.test(Password)){
             let pwdSymblalert = document.getElementById("PwdSymbolAlert").style.display = "none";  
             validArray.push('Password pass2')
          }else{
              let pwdSymblalert = document.getElementById("PwdSymbolAlert").style.display = "block";
          }
          
          if(PasswordDigits.test(Password)){
              let pwddigitAlert = document.getElementById("Pwd8info").style.display= "none";
              validArray.push('Password pass3')
          }else{
              let pwddigitAlert = document.getElementById("Pwd8info").style.display= "block";
              console.log("fail3");
          }
          
          if(PasswordUpperCase.test(Password)){
              let pwdUpperAlert = document.getElementById("PwdUpperAlert").style.display = "none";
              validArray.push('Password pass4')
          }else{
              let pwdUpperAlert = document.getElementById("PwdUpperAlert").style.display = "block";
          }
          
          if(PasswordsmallCase.test(Password)){
              let pwdLowerAlert = document.getElementById("PwdLowerAlert").style.display = "none";
              validArray.push('Password pass5')
          }else{
          let pwdLowerAlert = document.getElementById("PwdLowerAlert").style.display = "block";
          }
          
      }else{
          let pwdconfAlert = document.getElementById("PwdconfAlert").style.display = "block";
      }
  if(validArray.length == 5){
      console.log(validArray);
      return Password;
  }
  
  
  }
  function EmailValidation(emailInput){
  const emailRegex =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let validEmailArray = [];
  if(emailRegex.test(emailInput)){
      let cautionAlert = document.getElementById("CautionAlert").style.display = "none";
      validEmailArray.push('EmailPass');
  }else{
      if(emailInput == ''){
      let failureAlert = document.getElementById("FailureAlert").style.display = "block";
      }
      let failureAlert = document.getElementById("FailureAlert").style.display = "none";
      let cautionAlert = document.getElementById("CautionAlert").style.display = "block";
  
  }
  if(validEmailArray.length == 1){
      console.log(validEmailArray);
      return emailInput;
  }
  
  
  } 
  //Username Validation
  //ill consume some fake ass human random api so we can check the status if the usernames listed exist or not
  function userNameValidation(username,password){
      //username shouldn't match your password or contain combinations found in your password
    //^(?=.*\bjack\b)(?=.*\bjames\b).*$

    let testData = '<?= $dataJSON ?>'; // JSON format
    let jsonData = JSON.parse(testData);
    //console.log(json[0].name);
    //console.log(Object.keys(testDataObj));
      const MatchRege1 = `${password}`;
      // console.log(MatchRege1); //regex from the passwordcombination
      //it cant detect the pattern if the password is not the same or exact e.g L caps and l small aren't the same
      //so we put everything into a lowercase
      const Matchlower = MatchRege1.toLowerCase();
      const MatchRegex = new RegExp(Matchlower) ;
      if(password == null){
      console.log("catched the bug.Password empty", typeof password);
      //LatteXz22@
      }else{
        let unamePass = [];
        let newUsername = username.toLowerCase();
        if(MatchRegex.test(newUsername)){
            let UnamePassAlert = document.getElementById("UnamePassAlert").style.display= "block";
            console.log("the username and password are alike");
        }else{
            let UnamePassAlert = document.getElementById("UnamePassAlert").style.display= "none";
          //checking the username from db if there is a match
            let uCheckvalidator = [];
            //console.log(json.length); length of the array containing an object
                for(let i = 0 ; i <= jsonData.length ; i++ ){
                    var newvalObj = jsonData[i]; //object property for name
                    var newval = newvalObj.name;
                    //console.log(newval);
                        if(newUsername === newval.toLowerCase()){
                            uCheckvalidator.push(newval);
                            console.log('Username exist');
                            let unameAlert = document.getElementById("UnameAlert").style.display= "block";
                            break;
                        }else{
                          let unameAlert = document.getElementById("UnameAlert").style.display= "none";
                            uCheckvalidator.push('0');
                             if(uCheckvalidator.length == jsonData.length){ //the total number of users
                            console.log('Username is unique');
                            //   //const trueVal =  'Username is unique'; //debuging
                            unamePass.push('Usernamepass');
                            console.log(unamePass.length);
                            if(unamePass.length == 1){
                                console.log(unamePass);
                                  return username; 
                                   }
                             }
                        }
              }
              
        }
      
      }
  
  }
  
  //we want to add an event listener to our submit button
  var form = document.querySelector("form");
  let Subbutton = document.getElementById("signupBtn");
  
  form.addEventListener("submit", function(event){
  //stop form submission
      event.preventDefault();
  //logic flow
  let uname = document.getElementById("nme").value;
  let email = document.getElementById("emailinput").value;
  let origpwd = document.getElementById("pwd").value;
  let confirmpwd = document.getElementById("confirmpassword").value;
  
  let correctPassword = PasswordValidation(origpwd,confirmpwd);
  let correctUsername = userNameValidation(uname,correctPassword);
  let correctEmail = EmailValidation(email);
  //declare new variables to append the new values there
  if(typeof correctEmail != 'undefined' && typeof correctPassword != 'undefined'  && typeof correctUsername != 'undefined'){
      console.log(correctPassword,correctEmail,correctUsername);
      form.submit();
      //alert('You can now submit the data');//form.submit(); //submite the data
  }else{
      console.log('There is still an error in signing up');
  }
  
  
    
  });
  
  
  
  </script>
  </body>
</html>
