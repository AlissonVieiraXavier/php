<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;


Route::get('/', [PrincipalController::class, 'index']);
Route::get('/sobre-nos', [SobreNosController::class, 'index']);
Route::get('/contato',[ContatoController::class,'index']);

