<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExercicioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mxprogramador', function () {
    return view('mxprogramador');
});


Route:: get('/exercicio1', [ExercicioController::class,'exercicio1']);
