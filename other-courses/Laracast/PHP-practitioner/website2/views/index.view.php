<?php require 'partials/head'; ?>

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
    
<?php require 'partials/footer'; ?>