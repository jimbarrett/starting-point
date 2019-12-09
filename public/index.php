<?php
// display errors. for dev only
// TODO: set up local/prod environments?
ini_set('display_errors', 1);

// autoloader
require '../vendor/autoload.php';

// define routes here
$router = new App\Router();
// public routes
$router->get('/test', 'PagesController@test');

// leave this alone until I decide what I want to do with protected routes.
// $router->group('auth', [
// 	'get' => ['/admin','PagesController@admin'],
// 	'post' => ['/admin','PagesController@adminpost']
// ]);

var_dump($router);

// dispatch route based on server vars
$router->dispatch($_SERVER);
