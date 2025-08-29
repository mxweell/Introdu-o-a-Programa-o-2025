<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio02Controller extends Controller

{
    public function tarefa(){
        $nomes=['Chico', 'Pedro', 'Zeca'];
        return view('exercicio02', compact('nomes'));
    }
}
