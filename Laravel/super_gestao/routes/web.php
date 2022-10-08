<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobre-cdnos');
Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');
Route::get('/login',function (){ return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
      Route::get('/clientes',function (){ return 'clientes';});
      Route::get('/fornecedores',function (){ return 'fornecedores';});
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
Route::fallback(function(){
      return 'essa pagina não existe <a href="/" target="_blank">link pagina inicial</a>';
});

///////////////////////////////////////////////////

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'index'])->name('teste');
