<?php

namespace App\Classes;

class Template
{
    public function loader()
    {
        return new \Twig\Loader\FilesystemLoader(['../App/Views/site', '../App/Views/Admin']);
    }
    public function init()
    {
        $twig=new \Twig\Environment($this->loader(), [
            'debug'=>true,
            // 'cacche'=> ''
            'auto_reload'=> true
        ]);
        return $twig;
    }
    
}