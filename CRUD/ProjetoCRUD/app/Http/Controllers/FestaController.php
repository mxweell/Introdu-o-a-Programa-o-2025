<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FestaController extends Controller
{
    public function index(){
        return view('Produtos.festa');
    }

    public function login(){
        return view('Produtos.login');
    }
}
