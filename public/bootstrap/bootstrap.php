<?php
$controller=new App\Controllers\Controller;
$object=$controller->controller();

$method = new App\Controllers\Method;
dump($method->method($object));