<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = 'Alisson';
        return view('welcome',['nome' => $nome]);
    }
}
