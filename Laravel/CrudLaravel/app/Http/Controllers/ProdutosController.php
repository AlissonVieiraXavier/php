<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       Produto::create([
        'nome'=> $request->nome,
        'preco'=> $request->preco,
        'custo'=> $request->custo,
        'quantidade'=> $request->quantidade,

       ]);
       return('Produto criado com sucesso!');
    }
};
