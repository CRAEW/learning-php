<?php 

//require 'php/auth.php';
require 'php/connection.php';

// Open the connection to the database
$conn = openConnection();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" defer></script>
    <script src="js/script.js" defer></script>
</head>

<body>

<h1>Registration</h1>
<p>Fill up the fields to register.</p>

    <form action="profile.php?id=" method="post">

        <fieldset>

            <div>
                <label for="firstname">First name: </label>
                <input id ="firstname" type="text" name="firstname" required>
            </div>

            <div>
                <label for="lastname">Last name: </label>
                <input id ="lastname" type="text" name="lastname" required>
            </div>

            <div>
                <label for="username">Username: </label>
                <input id ="username" type="text" name="username" required>
            </div>

            <div>
                <label for="userpwd">Password: </label>
                <input id ="userpwd" type="password" name="userpwd" required>
            </div>

            <div>
                <label for="confirmpwd">Confirm password: </label>
                <input id ="confirmpwd" type="password" name="confirmpwd" required>
            </div>

            <div>
                <label for="linkedin">Linkedin: </label>
                <input id ="linkedin" type="url" name="linkedin" >
            </div>

            <div>
                <label for="github">GitHub: </label>
                <input id ="github" type="url" name="github" >
            </div>

            <div>
                <label for="email">E-mail: </label>
                <input id ="email" type="email" name="email" required>
            </div>

            <div>
                <label for="language">Language: </label>
                <input id ="language" type="text" name="language" >
            </div>

            <div>
                <label for="avatar">Avatar: </label>
                <input id ="avatar" type="url" name="avatar" >
            </div>

            <div>
                <label for="video">Favorite Youtube video: </label>
                <input id ="video" type="url" name="video" >
            </div>

            <div>
                <label for="quote">Favorite quote: </label>
                <textarea id="quote" name="quote" cols="30" rows="10" ></textarea>
            </div>

            <div>
                <label for="quote-author">Author of the quote: </label>
                <input id ="quote-author" type="text" name="quote-author" >
            </div>

            <div>
                <input id ="register" type="submit" name="register" value="Register">
            </div>


        </fieldset>


    </form>

<?php

    // Close the connection to the database
    closeConnection($conn);

?>

</body>

</html>