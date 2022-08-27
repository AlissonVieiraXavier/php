<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo',[ProdutosController::class,'create']);
Route::post('/produtos/novo',[ProdutosController::class,'store'])->name('registrarProduto');
Route::get('/produtos/pesquisa/{id}',[ProdutosController::class,'show']);
Route::get('/produtos/editar/{id}',[ProdutosController::class,'edit']);
Route::post('/produtos/editar/{id}',[ProdutosController::class,'update'])->name('alteraProduto');
