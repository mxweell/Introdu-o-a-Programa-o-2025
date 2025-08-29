<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercicio03controller extends Controller

{
    public function tarefa03(){
        $precos=[30, 25, 45];
        return view('exercicio03', compact('precos'));
    }
}

