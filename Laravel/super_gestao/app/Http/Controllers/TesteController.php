<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(int $p1,int $p2)
    {
       // return 'rello friendddd  '.$p1.'  '.$p2;
       return view('site.teste',['p1' => $p1,'p2' => $p2]);//array associativo
       //return view('site.teste',compact('p1','p2'));// with compact() method
    }
}
