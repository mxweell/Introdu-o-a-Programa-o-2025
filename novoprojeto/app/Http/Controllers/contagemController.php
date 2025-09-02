<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contagemController extends Controller
{
    public function contagem(){
        $produtos = ['produtoA', 'produtoB', 'produtoC'];   
        $quantidade = 0;
        foreach($produtos as $produto){
            $quantidade++;    
        }
        return view ('contagem', compact('quantidade', 'produtos'));
    }
}
