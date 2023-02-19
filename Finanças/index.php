<?php
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

// composer autoload
require __DIR__.'/vendor/autoload.php';
// autoload do projeto
require __DIR__ . "/source/autoload.php";

use \Source\App\Controller\Web;
use CoffeeCode\Router\Router;

//URL DO PROJETO
define('URL', 'http://localhost/projetos/Finanças');

$router = new Router(URL);
/*
 * Controllers
 */
$router->namespace("Source\Controller");

$router->get("/", "Web:home");


$router->dispatch();

/**
 * ERROS
 */
if($router->error()){
    $router->redirect($router->error());
}
?>