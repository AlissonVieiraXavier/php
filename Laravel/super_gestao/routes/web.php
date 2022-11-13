<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\LoginController;

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobre-nos');
Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');
Route::post('/requisicao-contato',[ContatoController::class,'create'])->name('site.req-contato');

Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/loginAuth',[LoginController::class,'auth'])->name('login.auth');


Route::prefix('/app')->middleware('autenticacao:default,visitante')->group(function(){
      Route::get('/clientes',function (){ return 'clientes';});
      Route::get('/fornecedor',[FornecedorController::class,'index']);
      Route::get('/produtos',function (){ return 'produtos';});
});

//Redirects //////////////////////////////////

Route::redirect('/route2','route1');
Route::get('/route1', function(){
         return 'route1';
})->name('site.route1');
Route::get('/route2', function(){   
      return redirect()->route('site.route1');
})->name('site.route2');

//fallback_exemplo
//Route::fallback(function(){
//      return 'essa pagina não existe <a href="/" target="_blank">link pagina inicial</a>';
//});

///////////////////////////////////////////////////

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'index'])->name('teste');
