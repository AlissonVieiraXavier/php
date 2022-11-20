<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }
    public function listar(Request $request)
    {
       $fornecedor = Fornecedor::where('nome','like','%'.$request->input('nome').'%')
       ->where('site','like','%'.$request->input('site').'%')
       ->where('uf','like','%'.$request->input('uf').'%')
       ->where('email','like','%'.$request->input('email').'%')->get();

       //return dd($fornecedor);
       return view('app.fornecedor.listar',['fornecedor' => $fornecedor]); 
    }
    public function adicionar(Request $request)
    {
       if($request->input('_token') != ""){

          //validação
          $request->validate([
            'nome'=>'required',
            'site'=>'required',
            'uf'=>'required',
            'email'=>'email | required'
          ],[
            'nome.required' => 'Nome invalido',
            'site.required' => 'site invalido',
            'uf.required' => 'UF invalido',
            'email.email'=>'email invalido'
          ]);
          Fornecedor::create($request->all());

         echo "<script>alert('Fornecedor adicicionado com sucesso!')</script>";
       }
       
       return view('app.fornecedor.adicionar'); 
    }
    public function editar($id)
    {
      $fornecedor= Fornecedor::find($id);
      //dd($fornecedor);
      return view('app.fornecedor.adicionar',['fornecedor'=>$fornecedor]);
    }
}

//return view('app.fornecedor.index', compact('fornecedor'));
