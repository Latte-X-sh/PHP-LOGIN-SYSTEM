<?php
session_start();
// var_dump($_SESSION);
// die();

if(!isset($_SESSION['content']) || $_SESSION['content'] !== true){
    header("location: signin.php");
    exit;
  }
  $userEmail = $_SESSION['email'];
  $otpcode = $_SESSION['otp'];
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
         if(isset($_POST['input1'])){
             $slotOne = $_POST['input1'];
         }else{
            $slotOne = '';   
             }
         
         if(isset($_POST['input2'])){
            $slotTwo = $_POST['input2'];
        }else{
           $slotTwo = '';   
            }
        
        if(isset($_POST['input3'])){
            $slotThree = $_POST['input3'];
        }else{
           $slotThree = '';   
            }
        
        if(isset($_POST['input4'])){
            $slotFour = $_POST['input4'];
        }else{
           $slotFour = '';   
            }
        
        if(isset($_POST['input5'])){
            $slotFive = $_POST['input5'];
        }else{
           $slotFive = '';   
            }
        
        if(isset($_POST['input6'])){
            $slotSix = $_POST['input6'];
        }else{
           $slotSix = '';   
            }
       
        $resultOTP = $slotOne.$slotTwo.$slotThree.$slotFour.$slotFive.$slotSix;
        if( $otpcode == $resultOTP ){
            $_SESSION['change'] = true;
            echo 'success';
            die();
        }else{
            echo 'type error';
            var_dump($otpcode);
            die();
        }
     
         
 }

    
    

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords"content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Moses Odalo">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <title>OTP -  page</title>
        



<!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <br>
    <br>
    <br>
    <!-- the page should be universal.If the otp 6 numbers match then proceed to enable the user change the password or login -->
        <div class="container col-lg-6 col-sm-6 mx-auto align-items-center  ">
        <div class="card py-5 px-3">
        <h2 class="mx-auto">Forgot Password OTP</h2>
      
               <span class="mx-auto mb-4">Enter the code we just sent to your Email
                   <B><?php echo htmlspecialchars($userEmail)?></B><!-- This will automatically pick the user's email while it is hashed-->

               </span>
               <form method ='post'>
                        <div class="container">
                        <div class="row ">
                                        <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                            <input type="text" name ='input1' class="form-control text-lg text-center" placeholder="_" aria-label="2fa">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                            <input type="text" name ='input2' class="form-control text-lg text-center" placeholder="_" aria-label="2fa">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                            <input type="text" name ='input3' class="form-control text-lg text-center" placeholder="_" aria-label="2fa">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                            <input type="text" name ='input4' class="form-control text-lg text-center" placeholder="_" aria-label="2fa">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                            <input type="text"  name ='input5' class="form-control text-lg text-center" placeholder="_" aria-label="2fa">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-2 ps-0 ps-md-2">
                                            <input type="text" name ='input6' class="form-control text-lg text-center" placeholder="_" aria-label="2fa">
                                        </div>
                            </div>
                            <div class="text-center">
                                <button type="submit"  class="btn bg-primary text-white btn-lg my-4">Continue</button>
                            </div>    
                            
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 ">
                        <div class="text-centre">
                                <button type="submit"  class="btn bg-success text-white btn-lg my-4">Resend code</button>
                            </div> 
                        </div>
                    </div>

            </form>
            </div>
</div>

   