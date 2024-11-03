<?php

namespace App\Controllers;
use App\Classes\Uri;
class Controller
{
    const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
    const FOLDER_CONTROLLER = ['Site', 'Adimin'];
    const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroController';

    
    private $uri;
    public function __construct()
    {
        $this->uri = new Uri;
    }

    private function getController(){

        if (!$this->uri->emptyUri()) {
            $explodeUri=array_filter(explode('/',$this->uri->getUri()));
            return ucfirst($explodeUri[1]).'Controller';
            
        }
        return ucfirst(DEFAULT_CONTROLLER).'Controller';
    }
    public function controller(){
        $controller=$this->getController();
        foreach(self::FOLDER_CONTROLLER as $folderController){
            if (class_exists(self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller)) {
                return self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller;
            }
        }
        return self::ERROR_CONTROLLER;
    }
}