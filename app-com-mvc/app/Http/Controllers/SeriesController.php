<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Stranger things',
            'Simpsons',
            'The Office',
            'Friends'
        ];
        return view('Series.index')->with('series',$series);
        
    }
    public function create()
    {
        return view('Series.create');
    }
    public function store(Request $req){
        $nomeSerie = $req->input('nome');
        if(DB::insert("INSERT INTO series(nome) VALUES (?)", [$nomeSerie])){
            return "alright";
        }else{
            return "no right";
        }
    }
}
