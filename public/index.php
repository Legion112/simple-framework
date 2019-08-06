<?php
require '../vendor/autoload.php'; /** @see https://mega.nz/#!BjZDTAwL!dcGixjZWbAVweXMeMprrUzMzb3hNC35AIGgxt2El1uo */
require '../config/bootstrap.php';


$uri = $_SERVER['REQUEST_URI'];

$router =  new \App\Router(require '../config/routs.php');

list($classController, $methodName) = $router->getControllerNameAndMethod($uri);

$controller = new $classController;

echo $controller->$methodName();