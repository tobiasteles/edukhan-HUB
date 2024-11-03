<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
    session_start();

    define('DEFAULT_CONTROLLER', 'home');
    define('DEFAULT_METHOD', 'index');
    
    
    require '../vendor/autoload.php';
    require '../App/Functions/functions_twig.php';
    require '../public/bootstrap/bootstrap.php';
    
    
}
