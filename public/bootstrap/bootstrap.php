<?php


// Chamando controller

$callController = new App\Controllers\Controller;
$calledController = $callController->controller();


$controller=new $calledController();

// Chamando method

$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);


$controller->$method();

