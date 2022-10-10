<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedor =[ 
            0 => ['nome' => 'joão', 'status' => 'S'],
            1 => ['nome' => 'joão', 'status' => 'N'],
            2 => ['nome' => 'joão', 'status' => 'S'],
            3 => ['nome' => 'joão', 'status' => 'N'],
            4 => ['nome' => 'joão', 'status' => 'S'],
            5 => ['nome' => 'joão', 'status' => 'N'],
            6 => ['nome' => 'joão', 'status' => 'S'],
            7 => ['nome' => 'joão', 'status' => 'N'],
            8 => ['nome' => 'joão', 'status' => 'S'],
            9 => ['nome' => 'joão', 'status' => 'N'],
           10 => ['nome' => 'maria', 'status' => 'S'],
           11 => ['nome' => 'maria', 'status' => 'N'],
           12 => ['nome' => 'maria', 'status' => 'S'],
           13 => ['nome' => 'maria', 'status' => 'N'],

        ];
        return view('app.fornecedores', compact('fornecedor'));
    }
}
