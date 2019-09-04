<?php require 'connection.php'; ?>

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

    <header>
        <!-- Search profile based on ID -->
        <form action="profile.php" method="POST">
            <input type="hidden" name="submmitted" value="true">
            <label for="search-id">Search id:
            <input id="search-id" type="text" name="search">
            </label>
            <input type="submit" value="Get profile!" name="submitted">
        </form>
    </header>

    <main>

    <!-- connect to the database -->
    <?PHP if(isset($_POST['submitted'])): ?>
        <?PHP
            $conn = openConnection();

            $search = $_POST['search'];
            $image = 

            // Select data from the database
            $sql = "SELECT * FROM hopper_2 WHERE id=$search"; 
            // Save selected data in variable
            $result = $conn->query($sql) or die('error getting data');
        ?>

            <?php while($profile = $result->fetch_assoc()): ?>

                <!-- Profile page START -->
                <h2>
                    <?php echo $profile['first_name']." ".$profile['last_name']; ?>
                    <span><?php echo $profile['username']; ?></span>
                </h2>

                <div class="img">
                    <img src="<?php echo $profile['avatar']; ?>" alt="profile picture <?php echo $profile['avatar']; ?>">
                </div>
                

                <p>
                    <?php echo $profile['quote']; ?>
                    <span><?php echo $profile['quote_author']; ?></span>
                </p>

                


                <!-- social media icons -->
                <div class="contactcontainer">
                    <div class="linkedin btn-round"><a href="<?php echo $profile['linkedin']; ?>" target="_blank rel="noreferrer"><i class="fab fa-linkedin-in"></i></a></div>
                    <div class="github btn-round"><a href="<?php echo $profile['github']; ?>" target="_blank rel="noreferrer"><i class="fab fa-github-alt"></i></a></div>
                    <div class="email btn-round"><a href="mailto:<?php echo $profile['email']; ?>" target="_blank rel="noreferrer"><i class="fas fa-envelope"></i></a></div>
                </div>
                
    

            <?php endwhile; ?>


    <?php endif; ?>





    <!-- 
    `id` int(11) NOT NULL,
    `first_name` text NOT NULL,
    `last_name` text NOT NULL,
    `username` text NOT NULL,
    `password` text,

    `linkedin` text NOT NULL,
    `github` text NOT NULL,
    `email` text NOT NULL,

    `preferred_language` text NOT NULL,
    `belikebill` text NOT NULL,
    `avatar` text NOT NULL,
    `video` text NOT NULL,

    `quote` text NOT NULL,
    `quote_author` text NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
     -->



        </main>



    </section>

<!-- Close connection to database -->
   <?php closeConnection($conn); ?>
</body>
</html>