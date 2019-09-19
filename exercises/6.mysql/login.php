<?php 

    // Error handling
    ini_set('display_errors',1); error_reporting(E_ALL);
    
    require 'php/connection.php'; 
    // connect to the database
    $conn = openConnection();

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $userpwd = $_POST['pwd'];

        // Select data from the database
        $sql = "SELECT * FROM hopper_2 WHERE username='$user' OR email='$user'";
        // Save selected data in variable
        $result = $conn->query($sql) or die('error getting data');

        $row = $result->fetch_assoc();
        // Secured password
        $hash = $row['userpwd'];
        $userpwd_unhash = password_verify($userpwd, $hash);

        if($userpwd_unhash) {
            echo "login succeeded";

            session_start();
            $_SESSION['login'] = "login successful";
            $_SESSION['user_id'] = $row['id'];

            header("Location: index.php");
        } else {
            echo "username or password incorrect";
        }
    }

    
    // TEST
    /*
        user: CRAEWENDY
        password: 1234
    */


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>
<body>

<h1>Log in</h1>


<form action="login.php" method="POST">

    <div>
        <label for="user">Username or E-mail</label>
        <input id="user" type="text" name="user">
    </div>

    <div>
        <label for="pwd">Password</label>
        <input id="pwd" type="password" name="pwd">
    </div>

    <div>
        <input id="login" type="submit" name="login">
    </div>


</form>
    
</body>
</html>