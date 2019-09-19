<?php 

    // Error handling
    ini_set('display_errors',1); error_reporting(E_ALL);

    // START SESSION VARIABLES OR RETRIEVE THEM IF SESSION IS STARTED
    session_start();

    // CHECK if user is logged in
    if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
        echo "Please log in first.";
    }

    // Connect to DB
    require 'php/connection.php';
    $conn = openConnection();

    // Session user id
    $loggedin_user = $_SESSION['user_id'];

    // Query to retrieve data from database
    $sql = "SELECT * FROM hopper_2 WHERE id=$loggedin_user";

    // Save selected data in variable
    $result = $conn->query($sql) or die('error getting data');
    // Retrieve data
    $profile = $result->fetch_assoc();

    // Save changes to the database when button is clicked
    if(isset($_POST['save_changes'])) {
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
        $author = $_POST['author'];

        $sql = "UPDATE hopper_2 
                SET first_name='$firstname',
                    last_name='$lastname',
                    username='$username',
                    linkedin='$linkedin',
                    github='$github',
                    email='$email',
                    preferred_language='$language',
                    avatar='$avatar',
                    video='$video',
                    quote='$quote',
                    quote_author='$author'
                WHERE id=$loggedin_user";

        if ($conn->query($sql) === TRUE) {
            echo "Update successfully";
            header("Location: profile.php?id=$loggedin_user");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL UPDATE Form</title>
</head>

<body>

    
<h1>Edit profile</h1>
<p>Change your profile.</p>

    <form action="edit.php" method="post">

        <fieldset>

            <div>
                <label for="firstname">First name: </label>
                <input id ="firstname" type="text" name="firstname" value="<?php echo $profile['first_name']?>" required>
            </div>

            <div>
                <label for="lastname">Last name: </label>
                <input id ="lastname" type="text" name="lastname" value="<?php echo $profile['last_name']?>"required>
            </div>

            <div>
                <label for="username">Username: </label>
                <input id ="username" type="text" name="username" value="<?php echo $profile['username']?>" required>
            </div>

            <div>
                <label for="linkedin">Linkedin: </label>
                <input id ="linkedin" type="url" name="linkedin" value="<?php echo $profile['linkedin']?>" >
            </div>

            <div>
                <label for="github">GitHub: </label>
                <input id ="github" type="url" name="github" value="<?php echo $profile['github']?>">
            </div>

            <div>
                <label for="email">E-mail: </label>
                <input id ="email" type="email" name="email" value="<?php echo $profile['email']?>" required>
            </div>

            <div>
                <label for="language">Language: </label>
                <input id ="language" type="text" name="language" value="<?php echo $profile['preferred_language']?>">
            </div>

            <div>
                <label for="avatar">Avatar: </label>
                <input id ="avatar" type="url" name="avatar" value="<?php echo $profile['avatar']?>">
            </div>

            <div>
                <label for="video">Favorite Youtube video: </label>
                <input id ="video" type="url" name="video" value="<?php echo $profile['video']?>">
            </div>

            <div>
                <label for="quote">Favorite quote: </label>
                <textarea id="quote" name="quote" cols="30" rows="10"><?php echo $profile['quote']?></textarea>
            </div>

            <div>
                <label for="author">Author of the quote: </label>
                <input id ="author" type="text" name="author" value="<?php echo $profile['quote_author']?>">
            </div>

            <div>
                <input id ="save_changes" type="submit" name="save_changes" value="save">
            </div>


        </fieldset>


    </form>


    <?php closeConnection($conn); ?>

</body>

</html>