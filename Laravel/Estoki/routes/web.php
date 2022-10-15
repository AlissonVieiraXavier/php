<?php

use App\Http\Controllers\MyAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Routes for authentication
Route::get('/dashboard',[MyAuthController::class,'dashboard']);
Route::get('/login',[MyAuthController::class,'index'])->name('login');
Route::post('/custom-login',[MyAuthController::class,'customLogin'])->name('login.custom');
Route::get('/register',[MyAuthController::class,'register'])->name('register-user');
Route::post('/custom-register',[MyAuthController::class,'customRegister'])->name('custom-register');
Route::get('/sign-out',[MyAuthController::class,'sign-out'])->name('sign-out');
//~~///




