<?php 
    // Error handling
    ini_set('display_errors',1); error_reporting(E_ALL);

// START SESSION VARIABLES OR RETRIEVE THEM IF SESSION IS STARTED
session_start();

// CHECK if user is logged in
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
    echo "Please log in first.";
}

// Connect to the database
require 'php/connection.php'; 
$conn = openConnection();

$user_id_selector=$_GET['id'];

// Select data from the database
if(!isset($_GET['search'])) {
    $sql = "SELECT * FROM hopper_2 WHERE id=$user_id_selector";
} elseif(isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM hopper_2 WHERE id=$search";
    header("Location: profile.php?id=$search");
} else {
    echo "Could not fetch data.";
}

// Save selected data in variable
$result = $conn->query($sql) or die('error getting data');
// Retrieve data
$profile = $result->fetch_assoc();

// SESSION START FOR blb-api
$_SESSION['name'] = $profile['first_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile page</title>
    <link href="css/styles.css" media="all" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4469be274f.js"></script>
</head>

<body>

    <section class="page">
        <h1>Profile page</h1>

        <header>

        <?php
        // CHECK if profile ID is from logged in user
        $loggedin_user = $_SESSION['user_id'];

        if($loggedin_user === $user_id_selector):
        ?>
            <form action="" method="post">
                <input id="delete" type="submit" value="DELETE" name="delete">
                <input id="edit" type="submit" value="EDIT" name="edit">
            </form>

        <?php 
            if(isset($_POST['edit']) && ($profile['user_rights'] === 'admin')) {
                header("Location: edit.php");
            }
            
            if(isset($_POST['delete']) && ($profile['user_rights'] === 'admin')) {
                $sql = "DELETE FROM hopper_2 WHERE id='$loggedin_user'";
                if ($conn->query($sql) === TRUE) {
                    header("Location: index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        ?>

        <?php endif; ?>



        


            <!-- Search profile based on ID -->
            <form action="profile.php" method="GET">
                <input type="hidden" name="submmitted" value="true">
                <label for="search-id">Search id:
                    <input id="search-id" type="text" name="search">
                </label>
                <input type="submit" value="Get profile!" name="submitted">
            </form>
            <form action="login.php">
                <input type="submit" value="Login" name="login">
            </form>
        </header>

            <main> <!-- Profile page START -->
            <h2>
                <?php echo $profile['first_name']." ".$profile['last_name']; ?>
                <span><?php echo $profile['username']; ?></span>
            </h2>

            <div class="img">
                <img src="<?php echo $profile['avatar']; ?>" alt="profile picture <?php echo $profile['avatar']; ?>">
            </div>

            <div class="quote">
                <p>
                    <?php echo $profile['quote'] ?>
                    <span><?php echo $profile['quote_author'] ?></span>
                </p>
            
            </div>

             <div class="blb-meme">
                <img src="php/blb-api.php" alt="Be Like Bill API meme" /> 
            </div>
            
            

            <div class="btn-rctl">
                <a href="<?php echo $profile['video']; ?>" target="_blank" rel="noreferrer">Favorite Movie</a>
            </div>
        </main>

        <!-- just a div that's a line -->
        <div class="line"></div>

        <footer>
            <!-- social media icons -->
            <div class="contactcontainer">
                <div class="linkedin btn-round"><a href="<?php echo $profile['linkedin']; ?>" target="_blank rel="
                        noreferrer"><i class="fab fa-linkedin-in"></i></a></div>
                <div class="github btn-round"><a href="<?php echo $profile['github']; ?>" target="_blank rel="
                        noreferrer"><i class="fab fa-github-alt"></i></a></div>
                <div class="email btn-round"><a href="mailto:<?php echo $profile['email']; ?>" target="_blank rel="
                        noreferrer"><i class="fas fa-envelope"></i></a></div>
            </div>

            <div class="attributes">
            <a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by freepik - www.freepik.com</a>
            </div>


        </footer>

    </section>

    <!-- Close connection to database -->
    <?php closeConnection($conn); ?>
</body>

</html>