<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
