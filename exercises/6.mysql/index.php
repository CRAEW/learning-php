<?php 

// CHECK if user is logged in
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: login.php");

}

require 'php/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="css/indexstyles.css">
</head>
<body>
<?PHP 

    // Retrieve data from the database when button is clicked
    // connect to the database
    $conn = openConnection();

    // Select data from the database
    $sql = "SELECT id, first_name, last_name, email, preferred_language FROM hopper_2";

    // Save selected data in variable
    $result = $conn->query($sql) or die('error getting data');

    // display result as a table
    echo "<table>";
    echo "<tr> 
            <th>ID</th>
            <th>Profile</th>
            <th>First name</th>
            <th>Last name</th>
            <th>E-mail</th>
            <th>Language</th>
        </tr>";


    while($row = $result->fetch_assoc()){

        $user_id = $row['id'];

        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo "<a href='profile.php?id=$user_id' target='_blank' rel='noreferrer'>Profile</a>";
        echo "</td><td>";
        echo $row['first_name'];
        echo "</td><td>";
        echo $row['last_name'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['preferred_language'];
        echo "</td></tr>";

    }     
    echo "</table>";

    // Close connection to database
    closeConnection($conn);

?>
    
</body>
</html>