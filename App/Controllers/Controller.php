<?php

namespace App\Controllers;
use App\Classes\Uri;
class Controller
{
    const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
    const FOLDER_CONTROLLER = ['Site', 'Adimin'];
    const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroController';

    private $controller;
    private $uri;
    public function __construct()
    {
        $this->uri = new Uri;
    }

    public function getController(){
        if (!$this->uri->emptyUri()) {
            $explodeUri=array_filter(explode('/',$this->uri->getUri()));
            return ucfirst($explodeUri[1]).'Controller';
        }
    }

}