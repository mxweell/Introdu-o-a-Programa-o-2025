<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class musicaController extends Controller
{
    public function index(){
        return view('produtos.musica');
    }
    public function STORE (Request $request){
    $estilos = $request->input('estilos') ? implode(',', $request->input('estilos')) : null;
    DB::insert("INSERT INTO cadastro_clientes (nome, emai, telefone, idade, estilos_musical, novidades, created_at )
    VALUES (?,?,?,?,?,?, NOW())",
    [
    $request -> input ('nome'),
    $request -> input ('email'),
    $request -> input ('telefone'),
    $request -> input ('idade'),
    $estilos,
    $request -> input ('novidade')
    ]
    );
    return redirect() -> back () ->with('success', 'Cadastro realizado com sucesso!');
}
}
//Logica para armazenamento os dados do formulario

