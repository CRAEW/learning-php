<?php

// REQUEST_URI /learning-php/other-courses/Laracast/PHP-practitioner/website2/

$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);