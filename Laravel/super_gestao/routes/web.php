<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

//rota teste nome;
//Route::get('/contato/gg',function(){ return 'ohio';})->name;
//

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobre-nos');
Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');
Route::get('/login',function (){ return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
      Route::get('/clientes',function (){ return 'clientes';});
      Route::get('/fornecedores',function (){ return 'fornecedores';});
      Route::get('/produtos',function (){ return 'produtos';});
});


