<?php 

    require 'connection.php';

    // // Open the connection to the database
    $conn = openConnection();

    
    // set variables to connect input values to the database
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $language = $_POST['language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $author = $_POST['quote-author'];

    // Submit data to the database when button is clicked
    if(isset($_POST['submit'])) {
        $sql = "INSERT INTO hopper_2 (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author)
        VALUES ('$firstname','$lastname','$username','$linkedin','$github','$email','$language','$avatar','$video','$quote','$author')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Perform a query, check for error
    // if (!mysqli_query($conn,"INSERT INTO Persons (FirstName) VALUES ('Glenn')"))
    // {
    // echo("Error description: " . mysqli_error($conn));
    // }
    
    closeConnection($conn);
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL Form</title>
</head>

<body>

    <form action="" method="POST">

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
                <label for="linkedin">Linkedin: </label>
                <input id ="linkedin" type="url" name="linkedin" required>
            </div>

            <div>
                <label for="github">GitHub: </label>
                <input id ="github" type="url" name="github" required>
            </div>

            <div>
                <label for="email">E-mail: </label>
                <input id ="email" type="email" name="email" required>
            </div>

            <div>
                <label for="language">Language: </label>
                <input id ="language" type="text" name="language" required>
            </div>

            <div>
                <label for="avatar">Avatar: </label>
                <input id ="avatar" type="file" name="avatar" required>
            </div>

            <div>
                <label for="video">Favorite Youtube video: </label>
                <input id ="video" type="url" name="video" required>
            </div>

            <div>
                <label for="quote">Favorite quote: </label>
                <textarea id="quote" name="quote" cols="30" rows="10" required></textarea>
            </div>

            <div>
                <label for="quote-author">Author of the quote: </label>
                <input id ="quote-author" type="text" name="quote-author" required>
            </div>

            <div>
                <input id ="submit" type="submit" name="submit">
            </div>


        </fieldset>


    </form>

</body>

</html>