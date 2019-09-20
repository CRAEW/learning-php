<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My website</title>
</head>
<body>

<nav>

<li><a href="index.view.php" target="_blank" rel="noopener noreferrer">Home</a></li>
<li><a href="about.php" target="_blank" rel="noopener noreferrer">About Us</a></li>
<li><a href="contact.php" target="_blank" rel="noopener noreferrer">Contact Us</a></li>

</nav>

<h1>Learning PHP</h1>
    <h2>Connect to mysql database</h2>
        <ul>

            <?php foreach($tasks as $task) : ?>

                <li>
                    <?php if($task->completed) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else : ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>

            <?php endforeach; ?>

        </ul>
    
</body>
</html>