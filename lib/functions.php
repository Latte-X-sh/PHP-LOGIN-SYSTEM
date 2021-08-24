<?php
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
//Query for profile picture and gender pending 
    $testarray = array(
        $query1, $query2, $query3, $query4, $query5, $query6, $query7, $query8
    );
    $size = sizeof($testarray);
    $limit = $size - 1;//7
//   echo $testarray[0];  die();


    // $query="UPDATE `users` 
    //         SET name = CASE name
    //                         WHEN :name is NULL THEN users.name
    //                         WHEN :name THEN users.name
    //                         WHEN users.name is NULL THEN :name
    //                         ELSE :name
    //                         END 
    //         WHERE id = :id ";
    // $query ="UPDATE `users` 
    //             SET name = CASE  
    //                         WHEN :name is NULL THEN users.name
    //                         WHEN :name='' THEN users.name 
    //                         ELSE :name
    //                         END  
    //             WHERE id = :id ";
    // $stmt=$pdo->prepare($query);
    //     $stmt->bindParam(':name',$array_from_side['username']);
    //     $stmt->bindParam(':fname',$array_from_side['firstname']);
    //     $stmt->bindParam(':lname',$array_from_side['lastname']);
    //     $stmt->bindParam(':id',$iduser);
    //     $result=$stmt->execute(array(
    //         ':name'=> $array_from_side['username'],
    //         ':fname'=> $array_from_side['firstname'],
    //         ':lname'=> $array_from_side['lastname'],
    //         ':id'=> $iduser

    //     ));
    //     unset($query);


    for ($i = 0; $i <= $limit - 5; $i++) {
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
    for ($y = 3; $y <= $limit - 2; $y++) {
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
        $stmt->bindParam(':id', $iduser);
        $result = $stmt->execute(array(
            ':city' => $array_from_side['city'],
            ':phoneno' => $array_from_side['phoneno'],
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
                header('location:/login module/index.php');
            } else {
                $login_err = "Invalid email or password.";
            }
        } else {
            $login_err = "Invalid email or password.";
        }
    } else {
        $login_err = "Invalid email or password";//if the statement return a number not 1(true) then display this error message.
    }
    // Close statement
    unset($stmt);
    unset($pdo);
}
// get_connection(); //this function is only used to test the connection to the database.during dev mode.
// $email="mitchwangui@gmail.com";
// $password="123456";
//  login_db($email , $password);





//BY SHERA
function sanitizeText($textString) {
    return stripcslashes(trim(htmlspecialchars($textString)));
}




function handle_audio($mixTitle,$mixFile){

    $message = "";


    $fileTempPath = $mixFile['tmp_name'];
    $fileName = $mixFile['name'];
    $fileSize = $mixFile['size'];
    $fileType = $mixFile['type'];

    $fileNameCmps = explode(".", $fileName);

    $fileExtension = strtolower(end($fileNameCmps));


    $newFileName = md5(time() . $fileNameCmps[0]) . '.' . $fileExtension;

    $allowedFileExtensions = array('mp3');

    if (in_array($fileExtension, $allowedFileExtensions)) {

        $uploadFileDir = 'storage/uploaded_files/';
        $dest_path = $uploadFileDir . $newFileName;


        if(move_uploaded_file($fileTempPath, $dest_path))
        {

            $pdo = get_connection();
            $query = "INSERT INTO `mixes`(`title`, `size`, `type`, `filename`) VALUES (?,?,?,?)";

            $stmt = $pdo->prepare($query);

            $stmt->execute([sanitizeText($mixTitle) , $fileSize ,$fileType ,$newFileName]);

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






    header("Location:mix_upload.php?message=$message");





}
