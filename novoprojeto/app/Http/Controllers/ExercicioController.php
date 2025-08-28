<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function exercicio1(){
        $itens = ['guardaapo', 'papel', 'prato'];
        return view('exercicio1', compact ('itens'));
    }
}
