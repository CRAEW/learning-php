<?php
// Error handling
ini_set('display_errors',1); error_reporting(E_ALL);

require 'connection.php';

// Open the connection to the database
$conn = openConnection();

# REGISTRATION LOGIC

// Submit data to the database when button is clicked
if(isset($_POST)) {
    // set variables to connect input values to the database
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $userpwd = $_POST['userpwd'];
    $confirmpwd = $_POST['confirmpwd'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $language = $_POST['language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $author = $_POST['quote-author'];

    // Secure password
    $userpwd_hash = password_hash($userpwd, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM hopper_2 WHERE username='$username' OR email='$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row['username'] == $username){
                echo "Username already taken. Choose another username.";
            } elseif($row['email'] == $email){
                echo "There's already an account with that E-mailaddress.";
            }
        }
    } else {
        // Save new record to the database
        $sql = "INSERT INTO hopper_2 (first_name, last_name, username, userpwd, linkedin, github, email, preferred_language, avatar, video, quote, quote_author)
        VALUES ('$firstname','$lastname','$username','$userpwd_hash','$linkedin','$github','$email','$language','$avatar','$video','$quote','$author')";

        $result = $conn->query($sql);

        // Select user id from database for redirect to profile page
        $sql = "SELECT id, username FROM hopper_2 WHERE email='$email'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()){

                $_SESSION['user_id']=$row["id"];
                
                echo "Registration successfully! "."\r\n"."id: ".$row["id"]." - Username: ".$row["username"]."<br>";

                echo "<button type='button' class='swal2-confirm swal2-styled' aria-label='' style='display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214); color=#fff; text-decoration=none;'><a href=./profile.php?id=$user_id style='text-decoration:none; color:white;'>PROFILE</a></button>";

                // die(print_r($result->num_rows));
            }
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo 'No data.';
}

// Close connection to database
closeConnection($conn);

?>