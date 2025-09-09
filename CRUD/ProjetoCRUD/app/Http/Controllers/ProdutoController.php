<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function criar()
    {      
            $linhas = DB::select("SELECT id, nome FROM tipos_produtos ORDER BY nome ASC");
            $tipos= [];
            foreach($linhas as $linha){
            $tipos[$linha->id] = $linha->nome;
    }
            return view('Produtos.criar', compact('tipos'));
    }

    public function salvar(Request $Request) 
    {      
          $dados = $Request->validate([
          "nome" => ['required', 'string', 'max:255'],
          "tipos_id" => [' required', 'integer'],
         ]);

         DB::insert("INSERT INTO produto (nome, tipo_id, created_at)
         VALUES(?,?, now())", [$dados['nome'], $dados['tipos_id']]);

         return redirect()->route('produtos.salvar');
    }
    
}