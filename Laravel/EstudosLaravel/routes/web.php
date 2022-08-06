<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $nome = 'Alisson';
    return view('welcome',['nome' => $nome]);
});
