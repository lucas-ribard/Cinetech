<?php
//load the autoloader
require 'vendor/autoload.php';
//load altorouter
$router = new AltoRouter();
$router->setBasePath('/Cinetech');
//load filmcontroller


//get necessary .env data
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


//Maps
$router->map('GET', '/', function () {
    require_once('src/View/Acceuil.php');

});

$router->map('GET', '/films', function () {
    echo 'all films';
});

$router->map('GET', '/films/[i:id]', function ($id) {
    require_once("src/View/FilmDetail.php");
   
});

$router->map('GET', '/series/[i:id]', function ($id) {
    require_once("src/View/SeriesDetail.php");
   
});



//match Router
$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

