<?php

namespace App\Controllers\Site;
use App\Controllers\BaseController;
use App\Models\Site\User;
class HomeController extends BaseController
{
    public function index()
    {
        
        $dados=[
            'titulo'=> 'Edukhan HUB | Loja Virtual | Loja de Prêmios | Portal de Avaliações',
            'nome' => 'Tobias'
        ];
       $template = $this->twig->load('site_home.html');
       $template->display($dados);
    }
}