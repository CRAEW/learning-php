<?php

// REQUEST_URI /learning-php/other-courses/Laracast/PHP-practitioner/website2/
// $uri = learning-php/other-courses/Laracast/PHP-practitioner/website2

$router->define([
    'learning-php/other-courses/Laracast/PHP-practitioner/website2' => 'controllers/index.php',
    'learning-php/other-courses/Laracast/PHP-practitioner/website2/about' => 'controllers/about.php',
    'learning-php/other-courses/Laracast/PHP-practitioner/website2/about/culture' => 'controllers/about-culture.php',
    'learning-php/other-courses/Laracast/PHP-practitioner/website2/contact' => 'controllers/contact.php'
]);