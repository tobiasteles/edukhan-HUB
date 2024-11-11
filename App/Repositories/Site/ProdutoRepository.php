<?php

namespace App\Repositories\Site;

use App\Models\Site\ProdutoModel;

class ProdutoRepository
{
    private $produto;

    public function __construct()
    {
        $this->produto = new ProdutoModel;
    }
    public function listarProdutosOrdenadosComLimite($limite){
        $sql="SELECT*FROM {$this->produto->table} ORDER BY produto_destaque=1 DESC LIMIT {$limite}";
        $this->produto->typeDatabase->prepare($sql);
        $this->produto->typeDatabase->execute();
        return $this->produto->typeDatabase->fetchAll();
    }
}