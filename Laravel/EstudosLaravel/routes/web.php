<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

//Route::get(rota, ação(controller));
Route::get('/', [EventController::class,'index']);

Route::get('/produtos', function(){
    return view('produtos');
});
Route::get('/produtos_teste/{id?}', function($id=1){
    return view('produto',['id'=> $id]);
});