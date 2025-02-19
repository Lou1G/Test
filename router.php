<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/babyswimming' => 'controllers/babyswimming.php',
    '/contact' => 'controllers/contact.php',
    '/duogroupsessions' => 'controllers/duogroupsessions.php',
    '/individualsessions' => 'controllers/individualsessions.php',
    '/packages' => 'controllers/packages.php',
    '/pool' => 'controllers/pool.php',
    '/privateevent' => 'controllers/privateevent.php',
    '/register' => 'controllers/register.php',
    '/students' => 'controllers/students.php',
    '/trainer' => 'controllers/trainer.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);
