<?php

use App\Classes\Template;

$template = new Template;
$twig = $template->init();


// Chamando controller

$callController = new App\Controllers\Controller;
$calledController = $callController->controller();


$controller = new $calledController();
$controller->setTwig($twig);



// Chamando method

$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);


$controller->$method();

