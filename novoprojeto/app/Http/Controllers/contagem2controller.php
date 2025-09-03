<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contagem2controller extends Controller
{
    public function contagem2(){
        $Produtos = ['ProdutoA', 'ProdutoB', 'ProdutoC', 'ProdutoD', 'ProdutoE', 'ProdutoF'];
        $quantidade = 0;
        foreach($Produtos as $Produto){
            $quantidade++;   
    }
    return view ('contagem2', compact('quantidade'));
}
}
