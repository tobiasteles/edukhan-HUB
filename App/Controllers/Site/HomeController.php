<?php

namespace App\Controllers\Site;
use App\Controllers\BaseController;
use App\Repositories\Site\ProdutoRepository;
class HomeController extends BaseController
{
    public function index()
    {
        $produtoRepository= new ProdutoRepository;
        dump($produtoRepository->listarProdutosOrdenadosComLimite(3));
        
        $dados=[
            'titulo'=> 'Edukhan HUB | Loja Virtual | Loja de Prêmios | Portal de Avaliações',
            'nome' => 'Tobias'
        ];
       $template = $this->twig->load('site_home.html');
       $template->display($dados);
    }
}