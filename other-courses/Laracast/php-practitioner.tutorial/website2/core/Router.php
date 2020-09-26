<?php


class Router
{

    public $routes = [
    'learning-php/other-courses/Laracast/PHP-practitioner/website2' => 'learning-php/other-courses/Laracast/PHP-practitioner/website2/controllers/index.php',
    'learning-php/other-courses/Laracast/PHP-practitioner/website2/about' => 'controllers/about.php',
    'learning-php/other-courses/Laracast/PHP-practitioner/website2/about/culture' => 'controllers/about-culture.php',
    'learning-php/other-courses/Laracast/PHP-practitioner/website2/contact' => 'controllers/contact.php'
    ];


    // public static function load($file)
    // {
    //     $router = new static;
    //     require $file;
    // }

    // public function define($routes)
    // {
    //     $routes = $this->routes;
    //     var_dump($routes);
    // }

    public function direct($uri)
    {
      // learning-php/other-courses/Laracast/PHP-practitioner/website2

      if(array_key_exists($uri, $this->routes))
      {
          return $this->routes[$uri];
      }

      throw new Exception('No route defined for this URI.');

    }

}