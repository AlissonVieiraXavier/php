<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{

   // public function ___construct()
   // {
   //     $this->middleware(LogAcessoMiddleware::class);
   // }

    public function index()
    {
        return view('site.sobre-nos');
    }
}
