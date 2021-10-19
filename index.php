<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require('app/Http/Router.php');


$router = new Router;

$router->define('','app/Controllers/Home.php');

$router->define('roduct','app/Controllers/Home.php');

$router->define('roduct2','app/Controllers/Home.php');

$router->define('roduct3','app/Controllers/Home.php');

$router->define('roduct4','app/Controllers/Home.php');

$router->define('roduct5','app/Controllers/Home.php');

$router->define('roduct6','app/Controllers/Home.php');

// Define your Routes here
$uri = trim($_SERVER['REQUEST_URI'],  'webshop/webshop/index.php');
//$uri = str_replace('webshop/webshop/index.php', '', $uri);
//var_dump($uri);

require $router->direct($uri); 
