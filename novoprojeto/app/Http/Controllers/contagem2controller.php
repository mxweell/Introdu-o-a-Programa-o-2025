<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contagem2controller extends Controller
{
    public function contagem2(){
        $produto = ['ProdutoA', 'Produto2', 'Produto3', 'Produto4', 'Produto5', 'Produto6'];
        $quantidade = 0;
        foreach($itens as $item){
            $quantidade++;   
    }
    return view ('contagem2', compact('quantidade','produto'));
}
}
