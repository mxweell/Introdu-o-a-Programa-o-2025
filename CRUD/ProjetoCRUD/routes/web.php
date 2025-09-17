<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\testeController;
use App\Http\Controllers\musicaController;
use App\Http\Controllers\FestaController;


Route::get('festa', function () {
    return view('welcome');
});


Route::get('/produtos/criar', [ProdutoController::class, 'criar'])->name('produtos.criar');
Route::post('/produtos/criar', [ProdutoController::class, 'salvar'])->name('produtos.salvar');
Route::get('/testeController', [testeController::class, 'teste'])->name('teste.Controller');
Route::get('/musicaController', [musicaController::class, 'index'])->name('musica.Controller');
Route::post('/musicaController', [musicaController::class, 'STORE']);

Route::get('/festa',[FestaController::class, 'index'])->name('festa.show');

Route::get('/login',[FestaController::class, 'login'])->name('login.show');