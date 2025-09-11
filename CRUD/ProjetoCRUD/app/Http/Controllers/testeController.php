<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testeController extends Controller
{
    public function teste(){

        $linhas = DB::select ("SELECT code, name  FROM COUNTRY ORDER BY name ASC");
        $tipos = [];
        foreach($linhas as $linha){
            $tipos[$linha->code] = $linha->name;
        }

        return view('Produtos.teste', compact('tipos'));
    }
}