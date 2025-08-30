<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class associativocontroller extends Controller
{
    public function TrazerDados() {
        $dados = [
        'nome' => 'Max', 
        'idade' =>33, 
        'profissao' => 'Programador'];
        return view('associativo', compact('dados'));
    }
}
