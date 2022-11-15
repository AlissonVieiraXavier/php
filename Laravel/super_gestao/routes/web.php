<?php

use App\Http\Controllers\ClienteFornecedorController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobre-nos');
Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');
Route::post('/requisicao-contato',[ContatoController::class,'create'])->name('site.req-contato');

Route::get('/login/{erro?}',[LoginController::class,'index'])->name('login.index');
Route::post('/loginAuth',[LoginController::class,'auth'])->name('login.auth');


Route::prefix('/app')->middleware('autenticacao')->group(function(){
      Route::get('/home',[HomeController::class,'index'])->name('app.home');
      Route::get('/sair',[LoginController::class,'sair'])->name('app.sair');
      Route::get('/cliente',[ClienteFornecedorController::class,'index'])->name('app.cliente');
      Route::get('/fornecedor',[FornecedorController::class,'index'])->name('app.fornecedor');
      Route::post('/fornecedor/listar',[FornecedorController::class,'listar'])->name('app.fornecedor.listar');

      Route::get('/fornecedor/adicionar',[FornecedorController::class,'adicionar'])->name('app.fornecedor.adicionar');
      Route::post('/fornecedor/adicionar',[FornecedorController::class,'adicionar'])->name('app.fornecedor.adicionar');

      Route::get('/produto',[ProdutoController::class,'index'])->name('app.produto');
});


//fallback_exemplo
Route::fallback(function(){
      return 'essa pagina não existe <a href="/" target="_blank">link pagina inicial</a>';
});

///////////////////////////////////////////////////

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'index'])->name('teste');
