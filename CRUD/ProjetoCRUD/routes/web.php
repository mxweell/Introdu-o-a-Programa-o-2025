<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\testeController;
use App\Http\Controllers\musicaController;
use App\Http\Controllers\FestaController;
use App\Http\Controllers\loginController;   
use App\Http\Controllers\cadastroController;


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



Route::get('/Admlogin', [loginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/Admlogin', [loginController::class, 'login'])->name('admin.login');
Route::post('/Admlogout', [loginController::class, 'logout'])->name('admin.logout');
Route::get('/admin/registro',[loginController::class, 'register'])->name ('admin.register');



Route::middleware(['web'])->group(function () {
    Route::get('/admin/clientes',[cadastroController::class, 'listaCliente'])->name('admin.clientes');
    Route::get('/admin/user/create',[loginController::class, 'showCreateUserform'])->name('admin.isers');
    Route::post('/admin/user',[loginController::class, 'createUser'])->name('admin.users.store');
});

