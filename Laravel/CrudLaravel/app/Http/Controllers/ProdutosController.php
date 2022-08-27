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
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show',['produto' => $produto]);
    }
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }
    public function update(Request $request,$id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->custo,
        ]);
        return "Produto atualizado!";
    }
};
