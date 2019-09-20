<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>

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
        <?php foreach($taskarray as $heading => $value) : ?>

            <li>
                <strong><?php ucwords($heading); ?></strong> <?php //$value; ?>
            </li>

        <?php endforeach; ?>
    </ul>

<h3>Task for the day (v2)</h3>

    <ul>
        <li>
            <strong>Name: </strong><?php $taskarray['title']; ?>
        </li>

        <li>
            <strong>Due Date: </strong><?php $taskarray['due']; ?>
        </li>

        <li>
            <strong>Person Responsible: </strong><?php $taskarray['assigned_to']; ?>
        </li>

        <li>
            <strong>Status (ternary): </strong><?php $taskarray['completed'] ? 'Complete': 'Incomplete'; ?>
        </li>

        <li>
            <strong>Status (conditional): </strong>
            <?php

            if($taskarray['completed'])
            {
                echo '<div><span> class="icon">&#10004;</span></div>';
            } else {
                echo '&#10008;';
            }
            
            ?>
        </li>

        <li>
            <strong>Status (conditional): </strong>
            <?php if($taskarray['completed']) : ?>
                <span class="icon">&#10004;</span>

            <?php else : ?>
                <span class="icon">&#10008;</span>
            
            <?php endif; ?>
        </li>

    </ul>

    <hr>

    <h2>Functions</h2>

    <p><?php myAge(21); ?></p>
    <p><?php myAge(18); ?></p>


    <h2>Classes</h2>
        <ul>

            <?php foreach($tasklist as $taskobject) : ?>

                <li>
                    <?php if($taskobject->completed) : ?>
                        <strike><?= $taskobject->description; ?></strike>
                    <?php else : ?>
                        <?= $taskobject->description; ?>
                    <?php endif; ?>
                </li>

            <?php endforeach; ?>

        </ul>
    
</body>
</html>