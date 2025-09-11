<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\testeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos/criar', [ProdutoController::class, 'criar'])->name('produtos.criar');

Route::post('/produtos/criar', [ProdutoController::class, 'salvar'])->name('produtos.salvar');

Route::get('/testeController', [testeController::class, 'teste'])->name('teste.Controller');