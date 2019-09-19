<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

    header {
        background-color: grey;
        padding: 2em;
        text-align: center;
    }
    
    </style>
</head>
<body>

<h1>Learning PHP</h1>

<h2>List of names</h2>

<ul>
<?php foreach ($names as $name) : ?>

    <li><?= $name; ?></li>

<?php endforeach; ?>
</ul>

<h2>List of animals</h2>
<?php foreach ($animals as $animal) : ?>
    <li><?= $animal; ?></li>
<?php endforeach; ?>

<h2>Associative arrays</h2>
<?php foreach ($person as $feature => $val) : ?>
<li><strong><?= $feature; ?>:</strong> <?= $val ?></li>
<?php endforeach; ?>

<h3>Task for the day</h3>
    <ul>
        <?php foreach($task as $heading => $value) : ?>

            <li>
                <strong><?= ucwords($heading); ?></strong> <?= $value; ?>
            </li>

        <?php endforeach; ?>
    </ul>

<h3>Task for the day (v2)</h3>

    <ul>
        <li>
            <strong>Name: </strong><?= $task['title']; ?>
        </li>

        <li>
            <strong>Due Date: </strong><?= $task['due']; ?>
        </li>

        <li>
            <strong>Person Responsible: </strong><?= $task['assigned_to']; ?>
        </li>

        <li>
            <strong>Status (ternary): </strong><?= $task['completed'] ? 'Complete': 'Incomplete'; ?>
        </li>

        <li>
            <strong>Status (conditional): </strong>
            <?php

            if($task['completed'])
            {
                echo '<div><span> class="icon">&#10004;</span></div>';
            } else {
                echo '&#10008;';
            }
            
            ?>
        </li>

        <li>
            <strong>Status (conditional): </strong>
            <?php if($task['completed']) : ?>
                <span class="icon">&#10004;</span>

            <?php else : ?>
                <span class="icon">&#10008;</span>
            
            <?php endif; ?>
        </li>

    </ul>

    <hr>

    <h2>Functions</h2>

    <p><?php age(21) ?></p>
    <p><?php age(18) ?></p>
    
</body>
</html>