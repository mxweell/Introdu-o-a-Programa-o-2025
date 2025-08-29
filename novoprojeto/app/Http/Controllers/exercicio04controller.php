<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercicio04controller extends Controller
{
    public function tarefa04(){
        $protudos=['mouse', 'teclado', 'monitor'];
        return view('exercicio04', compact('produtos'));
    }
}

