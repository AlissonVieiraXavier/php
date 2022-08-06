<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {   
        return view('Pages.painel');
    }
    public function create(){
        return view('Pages.novo');

    }
}