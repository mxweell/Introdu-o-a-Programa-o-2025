<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function criar(){
            
            $linhas = DB::select("SELECT id, nome FROM tipos_produtos ORDER BY nome ASC");
            $tipos= [];
            foreach($linhas as $linha){
            $tipos[$linha->id] = $linha->nome;
            }

            return view('Produtos.criar', compact('tipos'));
                            }        
    
}

