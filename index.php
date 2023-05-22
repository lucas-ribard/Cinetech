<?php
//load the autoloader
require 'vendor/autoload.php';
//load altorouter
$router = new AltoRouter();
$router->setBasePath('/Cinetech');
//load filmcontroller
use App\Controller\FilmsController;

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

    $FilmsController = new FilmsController;
    $FilmInfo = $FilmsController->SeeFilmInfo($id);
    var_dump($FilmInfo);
});



//match Router
$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

