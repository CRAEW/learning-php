<?php

// Error handling
ini_set('display_errors',1); error_reporting(E_ALL);


require 'connection.php';

// Open the connection to the database
$conn = openConnection();

# REGISTRATION LOGIC

// Submit data to the database when button is clicked
if (isset($_POST)) {
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
    $author = '';

    // Secure password
    $userpwd_hash = password_hash($userpwd, PASSWORD_BCRYPT);
    $userpwd_unhash = password_verify($userpwd, $userpwd_hash);

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
                echo "id: ".$row["id"]." - Username: ".$row["username"]."<br>";
            }
        }

        die(print_r($result->num_rows));

    // Save the records to the database
    if ($result === TRUE) {
        //echo "Registration successfully";
        
        

        //$profile = $q_result->fetch_assoc();
       
        //return $user_id = $profile['id'];

        

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    

} else {
    echo 'No data.';
}

// Close connection to database
closeConnection($conn);

// Check if the email is valid (validate all other fields as well if necessary)
// Check if password and password confirm are equal
// Hash the password and add it to the database in it's hashed form (NEVER store unhashed / unencrypted passwords).
// If the registration fails, go back to the previous form, fill in all the previously filled in data (except the passwords) and show an error on the correct field
// If the registration succeeds, go to profile.php and show the user's own profile.


?>