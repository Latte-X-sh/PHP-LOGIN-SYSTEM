<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once (__ROOT__ .'. /vendor/phpmailer/phpmailer/src/Exception.php');
require_once  (__ROOT__ .'./vendor/phpmailer/phpmailer/src/PHPMailer.php');
require_once  (__ROOT__ .'./vendor/phpmailer/phpmailer/src/SMTP.php');
require_once  (__ROOT__ .'./vendor/autoload.php');


//function that connects my web page and the database
function get_connection()
{
    $config = require 'config.php';
    //WE NEED TO HAVE A FAILOVER INCASE THE DB CONNECTION AND SO WE NEED TO HAVE AN ERROR MECHANISM MODULE
    try {
        return new PDO($config['database_dsn'], $config['database_user'], $config['database_password']);
    } catch (PDOException $e) {
        die("The connection to the database is faulty " . $e->getMessage());
    }

}

function fetch_db()
{ //works well(fetches data from the db)
    $pdo = get_connection();
    // var_dump($pdo); die();
    $query = "SELECT * FROM users";
    $results = $pdo->query($query);
    $users = $results->fetchAll();
    return $users;

}

function fetch_dbUsername()
{ //works well(fetches username data from the db)
    $pdo = get_connection();
    // var_dump($pdo); die();
    $query = "SELECT `name` FROM users " ;
    $results = $pdo->query($query);
    $userNames = $results->fetchAll();
    return $userNames;

}

function fetch_dbEmail()
{ //works well(fetches username data from the db)
    $pdo = get_connection();
    // var_dump($pdo); die();
    $query = "SELECT `email` FROM users " ;
    $results = $pdo->query($query);
    $userEmails = $results->fetchAll();
    return $userEmails;

}
function fetch_user_email($userEmail)
{ //works well(fetches username data from the db)
    $pdo = get_connection();
    // var_dump($pdo); die();
    $query = "SELECT `email`,`name` FROM users where email = :email"  ;
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $userEmail);
    $result = $stmt->execute(array(
        ':email' => $userEmail,
    ));
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount() == 1){
        //means the email exists
        //echo $userRow['email'];
        //echo $userRow['name'];
        session_start();
        
        //generate random otp of 6 figures
        $randomSix = mt_rand(100000,999999);
           //code..
        $_SESSION['content'] = true;
        $_SESSION['email'] = $userRow['email'];
       
           //global mail class
           $siteurl = 'http://localhost/login module/';
           $passwordurl = 'http://localhost/login module/otp.php';
           $sitename = 'Indigo Regime'; 
           $mailservice = 'indigoregimegroupmail@gmail.com';
           $compTel = '+254796919703';
           $message = file_get_contents('emailtemp.php'); 
           //replace content of the message variable
           $message = str_replace('${site-name}', $sitename, $message); 
           $message = str_replace('${site-url}', $siteurl, $message);
           $message = str_replace('${reset-password-url}', $passwordurl, $message);
           $message = str_replace('${customer-service-email}', $mailservice, $message);
           $message = str_replace('${site-toll-free-number}', $compTel, $message);
           $message = str_replace('${OTP-CODE}', $randomSix, $message);
           $mail = new PHPMailer();
           $mail->SMTPDebug = 0;                   // Enable verbose debug output
           $mail->isSMTP();                        // Set mailer to use SMTP
           $mail->Host       = 'smtp.gmail.com';    // Specify main SMTP server
           $mail->SMTPAuth   = true;               // Enable SMTP authentication
           $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS ; // Enable TLS encryption, 'ssl' also accepted
           $mail->Port       = 587;                // TCP port to connect to.
           $mail->Username = $mailservice; // YOUR gmail email
           $mail->Password = 'Dev@23Work#!zabeMimo'; // YOUR gmail password
           //Sender and recipient settings
           $mail->setFrom($mailservice, 'Indigo Music');
           $mail->addAddress( $userEmail); // $userEmail
           $mail->MsgHTML($message);
           $mail->IsHTML(true);
           $mail->CharSet="utf-8";
           $mail->Subject = "Forgot your password?We can help.";
           $mail->send();
           $_SESSION['otp'] = $randomSix;
           header('Location:otp.php');
           
        // echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
           
    }else{
        echo 'no email like that'.$userRow['email'];
        header('Location:signin.php');
    }

    // header('Location:signup.php');
}



function fetch_user_data($userdata)
{
    //get connections
    $pdo = get_connection();
    //prepare the query to the database.SQL statement
    $query = "SELECT * from users where id='$userdata' ";
    $results = $pdo->query($query);
    $user = $results->fetch();
    return $user;
}

function save_to_db($nme, $emil, $pwd)
{
    // var_dump($nme,$emil,$pwd);die();
    try {
        $pdo = get_connection();
        $query = "INSERT into `users` ( `name`, `email`, `password`) VALUES (:name, :email, :password)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $nme);
        $stmt->bindParam(":email", $emil);
        $stmt->bindParam(":password", $pwd);
        $result = $stmt->execute(array(
            ':name' => $nme,
            ':email' => $emil,
            ':password' => $pwd,

        ));
        // var_dump($stmt);die();
    } catch (PDOException $e) {

    }
}


function get_old_password($user_email)
{
    $pdo = get_connection();
    $query = "SELECT `password` FROM `users` WHERE email= :email";
    $stmt = $pdo->prepare($query);
    $result = $stmt->execute(array(
        ':email' => $user_email
    ));
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $oldpassword = $userRow['password'];
    return $oldpassword;
    // echo $oldpassword ;die();
}

function update_password($newpass, $email, $passold)
{
    $pdo = get_connection();
    $oldpass = get_old_password($email);
    if ($passold === $oldpass) {
        $query = "UPDATE `users` SET password=:newpass where email= :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":newpass", $newpass);
        $stmt->bindParam(":email", $email);
        $result = $stmt->execute(array(
            ':newpass' => $newpass,
            ':email' => $email,
        ));
        header("Location:Account-settings.php?success=Password Successfylly updated");
    } else {
        header("Location:Account-settings.php?error=Wrong Old Password");
    }
}

function update_db_data($array_from_side, $iduser)
{
    $pdo = get_connection();
//Query for name
    $query1 = "UPDATE `users` 
                SET name = CASE  
                            WHEN :name is NULL THEN users.name
                            WHEN :name='' THEN users.name 
                            ELSE :name
                            END  
                WHERE id = :id ";
//Query for firstname
    $query2 = "UPDATE `users`  
                SET First_name = CASE 
                            WHEN :fname is NULL THEN users.First_name
                            WHEN :fname='' THEN users.First_name 
                            ELSE :fname 
                            END  
                WHERE id = :id ";
//Query for lastname
    $query3 = "UPDATE `users`  
                SET Last_name = CASE  
                            WHEN :lname  is NULL THEN users.Last_name 
                            WHEN :lname='' THEN users.Last_name 
                            ELSE :lname 
                            END  
                WHERE id = :id ";
//Query for Birthdate
    $query4 = "UPDATE `users`  
                SET date_of_birth = CASE 
                            WHEN :dbirth  is NULL THEN  users.date_of_birth
                            WHEN :dbirth='1970-01-01' THEN users.date_of_birth  
                            ELSE :dbirth 
                            END  
                WHERE id = :id ";
//Query for Email
    $query5 = "UPDATE `users`  SET email = CASE 
                            WHEN :email is NULL THEN  users.email
                            WHEN :email='' THEN users.email 
                            ELSE :email 
                            END  
                WHERE id = :id ";
//Query for Country
    $query6 = "UPDATE `users`  SET Country = CASE 
                         WHEN :country is NULL THEN users.Country
                         WHEN :country='' THEN users.Country 
                         ELSE :country
                         END  
                WHERE id = :id ";
//Query for City
    $query7 = "UPDATE `users`  SET City = CASE 
                         WHEN :city is NULL THEN  users.City 
                         WHEN :city='' THEN users.City 
                         ELSE :city 
                         END 
                WHERE id = :id ";
//Query for Phone number
    $query8 = "UPDATE `users`  SET Phone_number = CASE 
                         WHEN :phoneno  is NULL THEN users.Phone_number
                         WHEN :phoneno='' THEN users.Phone_number 
                         ELSE :phoneno 
                         END 
                WHERE id = :id ";
//Query for Gender
    $query9 = "UPDATE `users`  SET Gender = CASE 
        WHEN :gender  is NULL THEN users.Gender
        WHEN :gender='' THEN users.Gender 
        ELSE :gender 
        END     
                WHERE id = :id ";
//Query for profile picture and gender pending 
    $testarray = array(
        $query1, $query2, $query3, $query4, $query5, $query6, $query7, $query8,$query9,
    );
    $size = sizeof($testarray);
    $limit = $size - 1;//8
//   echo $testarray[0];  die();

    for ($i = 0; $i <= $limit - 6; $i++) {
        //executes this queries until successful
        $query = $testarray[$i];
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $array_from_side['username']);
        $stmt->bindParam(':fname', $array_from_side['firstname']);
        $stmt->bindParam(':lname', $array_from_side['lastname']);
        $stmt->bindParam(':id', $iduser);
        $result = $stmt->execute(array(
            ':name' => $array_from_side['username'],
            ':fname' => $array_from_side['firstname'],
            ':lname' => $array_from_side['lastname'],
            ':id' => $iduser

        ));
        unset($query);
    }
    for ($y = 3; $y <= $limit - 3; $y++) {
        //executes this queries until successful
        $query = $testarray[$y];
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':dbirth', $array_from_side['birthdate']);
        $stmt->bindParam(':email', $array_from_side['email']);
        $stmt->bindParam(':country', $array_from_side['country']);
        $stmt->bindParam(':id', $iduser);
        $result = $stmt->execute(array(
            ':dbirth' => $array_from_side['birthdate'],
            ':email' => $array_from_side['email'],
            ':country' => $array_from_side['country'],
            ':id' => $iduser

        ));
        unset($query);
    }
    for ($y = 6; $y <= $limit; $y++) {
        //executes this queries until successful
        $query = $testarray[$y];
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':city', $array_from_side['city']);
        $stmt->bindParam(':phoneno', $array_from_side['phoneno']);
        $stmt->bindParam(':gender', $array_from_side['gender']);
        $stmt->bindParam(':id', $iduser);
        $result = $stmt->execute(array(
            ':city' => $array_from_side['city'],
            ':phoneno' => $array_from_side['phoneno'],
            ':gender' => $array_from_side['gender'],
            ':id' => $iduser

        ));
        unset($query);
    }
    //  echo "status code 1- moment of truth "; die();
    //echo status code 1 and js takes it and alerts us that we are successfull

    // var_dump($stmt);die();
}

function login_db($emil, $pwd)
{
    $pdo = get_connection();
    $query = "SELECT * FROM `users` WHERE email= :email AND password= :pass";
    $stmt = $pdo->prepare($query);
    $result = $stmt->execute(array(
        ':email' => $emil,
        ':pass' => $pwd,
    ));
    // $row = $stmt->fetch() //the 1st implemention inside the if statement where $userRow is @
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC); //returns an associative array that contains the data from the db

    if ($stmt->rowCount() == 1) {
        if ($userRow) {
            $id = $userRow["id"];
            $email = $userRow["email"];
            $name = $userRow["name"];
            $password = $userRow["password"];
            // $truth = password_verify($pwd,$password); //this code is useful only when i've hashed my passwords.
            //  echo $id," ",$email," ",$name ;//this code echo the value from the database if they correct .
            if ($pwd == $password) {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id; //random number
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                header('location:./index.php');
            } else {
             $login_err = "Invalid%20email%20or%20password.";
             header('location:./signin.php?1'.$login_err);
            }
        } else {
            $login_err = "Invalid%20email%20or%20password..";
            header('location:./signin.php?2'.$login_err);
        }
    } else {
        $login_err = "Invalid%20email%20or%20password.";
        header('location:./signin.php?3'.$login_err);//if the statement return a number not 1(true) then display this error message.
    }
    // Close statement
    unset($stmt);
    unset($pdo);
}
// login flow for google sign in process
function glogin_newacc($email,$username,$profilepic){
    $pdo = get_connection();
//create a new account
$query = "INSERT into `users` ( `profile_image`,`name`, `email` ) VALUES (:profile,:name, :email)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":name", $username);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":profile", $profilepic);
$result = $stmt->execute(array(
    ':name' => $username,
    ':email' => $email,
    ':profile' => $profilepic,

));
}
function glogin_db($email,$username,$profilepic){
    $datatesting = [];
    $pdo = get_connection();
    //we want to check if the email match
    $query = "SELECT * FROM `users` WHERE email= :email ";
    $stmt = $pdo->prepare($query);
    $result = $stmt->execute(array(
        ':email' => $email
    ));
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() == 1) {
        array_push($datatesting ,'Existing user');
        if ($userRow) {
            $id = $userRow["id"];
            $email = $userRow["email"];
            $name = $userRow["name"];
            $password = $userRow["password"];
            $email = $userRow["email"];
            // var_dump($profilepic);
            // die();
            // session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id; //random number
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            if($userRow["profile_image"] == 'assets/img/user.jpg'){
                account_image_processing($profilepic);
            }
            $_SESSION["login_status"] = 'Authenticated with Google Successfully';
            header('location:./index.php');
        }
}else{
    array_push($datatesting ,'New user');
    glogin_newacc($email,$username,$profilepic);
    glogin_db($email,$username,$profilepic);

}

}






//BY SHERA
function sanitizeText($textString) {
    return stripcslashes(trim(htmlspecialchars($textString)));
}




function handle_audio($mixTitle,$mixFile,$uid){

    $message = "";


    $fileTempPath = $mixFile['tmp_name'];
    $fileName = $mixFile['name'];
    $fileSize = $mixFile['size'];
    $fileType = $mixFile['type'];
   

    $fileNameCmps = explode(".", $fileName);
    // print_r($fileNameCmps);
    $fileExtension = strtolower(end($fileNameCmps));
    // print_r($fileExtension);die();

    $newFileName = md5(time() . $fileNameCmps[0]) . '.' . $fileExtension;
    // print_r($newFileName);die();
    $allowedFileExtensions = array('mp3');

    if (in_array($fileExtension, $allowedFileExtensions)) {

        $uploadFileDir = 'storage/uploaded_mixes/';
        $dest_path = $uploadFileDir . $newFileName;


        if(move_uploaded_file($fileTempPath, $dest_path))
        {

            $pdo = get_connection();
            $query = "INSERT INTO `mixes`(`title`, `size`, `type`, `filename`,`dj_id`) VALUES (?,?,?,?,?)";

            $stmt = $pdo->prepare($query);

            $stmt->execute([sanitizeText($mixTitle) , $fileSize ,$fileType ,$newFileName,$uid]);

            $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() == 1) {
                $message = $fileName .' File is successfully uploaded.';
            }

        }
        else
        {
            $message = 'There was some error moving the file to upload directory.';
        }

    }else{

        $message ='File Type Unsupported.';

    }






    header("Location:./mix_upload.php?message=$message");


}
function account_image_processing($imageData){
   
    if(gettype($imageData == "string")){
        // var_dump($imageData);
        // die();
        $emailGoogle = $_SESSION['email'];
        $pdo = get_connection();
                
                $query ="UPDATE `users` 
                              SET profile_image = CASE  
                                WHEN :profile_image is NULL THEN users.profile_image
                                WHEN :profile_image='' THEN users.profile_image 
                                ELSE :profile_image
                                END  
                            WHERE email = :email ";
                $stmt = $pdo->prepare($query);  
                $stmt->bindParam(':profile_image',$imageData);
                $stmt->bindParam(':email', $emailGoogle);
                $result = $stmt->execute(array(
                    ':profile_image' => $imageData ,
                    ':email' => $emailGoogle
                ));
    }else{
        $iduser = $_SESSION['id'];
        $imageName= md5($imageData['name']);
        $imageType= $imageData['type'];
        $imageTempname= $imageData['tmp_name'];
        $imageError=    $imageData['error'];
        $imageSize= $imageData['size'];
        $imageFiledata = explode('/',$imageType);
        $size_of_array= sizeof($imageFiledata);
        // print_r($imageFiledata);die();
        $imageFileextension = $imageFiledata[$size_of_array-1];
        if($imageFileextension == "jpeg" || $imageFileextension == "jpg" || $imageFileextension == "png"  ){
            $destination="storage/profile_image/";
            $fileNewName= $destination.$imageName; //hashing of the location
            if(move_uploaded_file($imageTempname,$fileNewName)){
                $pdo = get_connection();
                
                $query ="UPDATE `users` 
                              SET profile_image = CASE  
                                WHEN :profile_image is NULL THEN users.profile_image
                                WHEN :profile_image='' THEN users.profile_image 
                                ELSE :profile_image
                                END  
                            WHERE id = :id ";
                $stmt = $pdo->prepare($query);  
                $stmt->bindParam(':profile_image',$fileNewName);
                $stmt->bindParam(':id', $iduser);
                $result = $stmt->execute(array(
                    ':profile_image' => $fileNewName ,
                    ':id' => $iduser
                ));
            
          
            }
        
        } 
   
    }
    
}
function mix_feed(){
    $pdo = get_connection();
    $query ='SELECT * FROM mixes';
    // if($limit){
    //     $query = $query.' LIMIT '.$limit; //spaces in the sql code is important
    // }
    $results= $pdo->query($query);
    $mixes = $results->fetchAll(PDO::FETCH_ASSOC);
    return $mixes;
}