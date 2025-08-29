<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;           
use App\Http\Controllers\Exercicio02Controller;
use App\Http\Controllers\exercicio03controller;
use App\Http\Controllers\exercicio04controller;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/exercicio1', [ExercicioController::class, 'exercicio1']);


Route::get('/Exercicio02', [Exercicio02Controller::class, 'tarefa']);

Route::get('/Exercicio03', [exercicio03controller::class, 'tarefa03']);

Route::get('/exercicio04', [exercicio04controller::class, 'tarefa04']);

