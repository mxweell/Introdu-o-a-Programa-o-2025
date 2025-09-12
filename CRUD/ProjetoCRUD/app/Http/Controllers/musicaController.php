<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class musicaController extends Controller
{
    public function index(){
        return view('produtos.musica');
    }
}
