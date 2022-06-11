<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeralController extends Controller
{
    public function index()
    {   
        //testar conecção com database 
        if(DB::select("SELECT * FROM documentos;")){
            return "alright";
        }else{
            return "no right";
        }
        //return view('Pages.painel');
    }
}
