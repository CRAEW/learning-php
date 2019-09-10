<?php 

    require 'php/connection.php'; 
    // connect to the database
    $conn = openConnection();
    // Select data from the database
    $sql = "SELECT * FROM hopper_2 WHERE id=$user_id OR email=$email";
    // Save selected data in variable
    $result = $conn->query($sql) or die('error getting data');

    $row = $result->fetch_assoc();

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


<form action="" method="POST">

    <div>
        <label for="user">Username or E-mail</label>
        <input id="user" type="text" name="pwd">
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