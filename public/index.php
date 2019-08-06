<?php
require '../vendor/autoload.php'; /** @see https://mega.nz/#!BjZDTAwL!dcGixjZWbAVweXMeMprrUzMzb3hNC35AIGgxt2El1uo */
require '../config/bootstrap.php';

$serviceLocator = \App\ServiceLocator::getInstance();
$serviceLocator->register(\App\Services::REQUEST, function () {
    return new \App\Request($_GET, $_POST, $_SERVER);
});


$uri = $_SERVER['REQUEST_URI'];


/** @var $router \App\Router */
$router = $serviceLocator->get(\App\Services::ROUTER);

list($classController, $methodName) = $router->getControllerNameAndMethod($uri);

$controller = new $classController;

echo $controller->$methodName();