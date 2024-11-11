<?php

namespace App\Controllers\Erro;

class ErroController{
    public function index()  {
        dump('Erro');
    }
    public function setTwig($twig){
        $this->twig=$twig;
    }
}