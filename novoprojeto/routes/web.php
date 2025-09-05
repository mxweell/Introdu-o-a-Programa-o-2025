<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;           
use App\Http\Controllers\Exercicio02Controller;
use App\Http\Controllers\exercicio03controller;
use App\Http\Controllers\exercicio04controller;
use App\Http\Controllers\associativocontroller;
use App\Http\Controllers\contagemController;
use App\Http\Controllers\contagem2Controller;

use App\Http\Controllers\ProdutosController;


Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/exercicio1', [ExercicioController::class, 'exercicio1']);


Route::get('/Exercicio02', [Exercicio02Controller::class, 'tarefa']);

Route::get('/Exercicio03', [exercicio03controller::class, 'tarefa03']);

Route::get('/exercicio04', [exercicio04controller::class, 'tarefa04']);

Route::get('/associativo',[associativocontroller::class, 'TrazerDados']);

Route::get('/exercicio04', [exercicio04controller::class, 'tarefa04']);


Route::get('/contagemController', [contagemController::class, 'contagem']);

route::get('/contagem2', [contagem2controller::class, 'contagem2']);

Route::get('/contagemController', [contagemController::class, 'contagem']);

Route::get('/produtos/novo',[ProdutosController::class, 'criar'])->nome('produtos.criar');



