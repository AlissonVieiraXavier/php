<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(int $p1,int $p2)
    {
        return 'rello friendddd  '.$p1.'  '.$p2;
    }
}
