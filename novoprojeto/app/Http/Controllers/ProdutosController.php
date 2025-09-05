<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function criar(){
        return view('Produtos.Criar');
    }
}
