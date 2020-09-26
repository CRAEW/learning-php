<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => '09wendy82',
        'connection' => 'mysql:host=wendywebsite',
        'options' => [
            // If the connections throws an error, display exceptions
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];