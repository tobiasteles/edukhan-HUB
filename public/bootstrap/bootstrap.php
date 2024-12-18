<?php

use App\Classes\Template;
use App\Classes\Parameters;


$template = new Template;
$twig = $template->init();

$twig->addFunction($site_url);

// Chamando controller

$callController = new App\Controllers\Controller;
$calledController = $callController->controller();


$controller = new $calledController();
$controller->setTwig($twig);
// Algo assim no bootstrap.php

// Chamando method

$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);




// Chamando Parameters

$parameters=new Parameters();
$parameter=$parameters->getParameterMethod($controller, $method);

$controller->$method($parameter);
