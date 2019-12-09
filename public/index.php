<?php
// display errors. for dev only
// TODO: set up local/prod environments?
ini_set('display_errors', 1);

// autoloader
require '../vendor/autoload.php';

// define routes here
$router = new App\Router();
// public routes
$router->get('/login', 'UsersController@login');
$router->post('/login', 'UsersController@doLogin');

var_dump($router);

// dispatch route based on server vars
$router->dispatch($_SERVER);
