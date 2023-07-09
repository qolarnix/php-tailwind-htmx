<?php declare(strict_types=1);

/**
 * Router
 */
$router = new \Bramus\Router\Router();

$router->get('/', function() {
    get_template('homepage', [
        'title' => 'Hello World'
    ]);
});

$router->run();