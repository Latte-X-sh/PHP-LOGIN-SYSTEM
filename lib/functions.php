<?php
//function that connects my web page and the database
function get_connection(){
    $config = require 'config.php';
    //WE NEED TO HAVE A FAILOVER INCASE THE DB CONNECTION AND SO WE NEED TO HAVE AN ERROR MECHANISM MODULE
    try{
        return new PDO($config['database_dsn'], $config['database_user'] , $config['database_password']);  
    } catch(PDOException $e){
        die("The connection to the database is faulty " . $e->getMessage());
    }
    
}
function fetch_db(){ //works well(fetches data from the db)
    $pdo = get_connection();
    // var_dump($pdo); die();
    $query = "SELECT * FROM users";
    $results = $pdo->query($query);
    $users = $results->fetchAll();
    return $users;

}
function save_to_db($nme,$emil,$pwd){
    // var_dump($nme,$emil,$pwd);die();
    try{
    $pdo = get_connection();
    $query = "INSERT into `users` ( `name`, `email`, `password`) VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":name", $nme);
    $stmt->bindParam(":email", $emil);
    $stmt->bindParam(":password", $pwd);
    $result = $stmt->execute(array(
        ':name'=> $nme,
        ':email'=> $emil,
        ':password'=>$pwd,
     
    ));
    // var_dump($stmt);die();
}
catch(PDOException $e){

}
}
function login_db($emil,$pwd){
    $pdo = get_connection();
    $query ="SELECT * FROM `users` WHERE email= :email AND password= :pass";
    $stmt = $pdo->prepare($query);
    $result = $stmt->execute(array(
        ':email'=> $emil,
        ':pass'=>$pwd,
    ));
    // $row = $stmt->fetch() //the 1st implemention inside the if statement where $userRow is @
    $userRow=$stmt->fetch(PDO::FETCH_ASSOC); //returns an associative array that contains the data from the db

    if($stmt->rowCount() == 1){
        if($userRow){
        $id = $userRow["id"];
        $email = $userRow["email"];
        $name = $userRow["name"];
        $password = $userRow["password"];
        // $truth = password_verify($pwd,$password); //this code is useful only when i've hashed my passwords.
        //  echo $id," ",$email," ",$name ;//this code echo the value from the database if they correct .
            if($pwd == $password){
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id; //random number
                $_SESSION["name"] = $name;
                header('location:/login module/index.php');
                                                }
                else{
                        $login_err="Invalid email or password.";
                    }
            }else{
                $login_err="Invalid email or password.";
            }
    }else{
        $login_err="Invalid email or password";//if the statement return a number not 1(true) then display this error message.
    }
    // Close statement
    unset($stmt);
    unset($pdo);
}
// get_connection(); //this function is only used to test the connection to the database.during dev mode.
// $email="mitchwangui@gmail.com";
// $password="123456";
//  login_db($email , $password);
 