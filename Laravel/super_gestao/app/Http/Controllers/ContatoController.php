<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato');
    }
    public function create(Request $request)
    {

        $request->validate([
                'name'=> ['required','min:3'],
                'email'=> ['email'],
                'telefone'=> ['required'],
                'motivo_contato'=>  ['required'],
                'mensagem'=> ['required']
        ]);
        //opção 1 - deu certo também
                // SiteContato::create([
                //'name'=> $request->input('name'),
                //'email'=>$request->input('email'),
                //'telefone'=>$request->input('telefone'),
                //'motivo_contato'=>$request->input('motivo_contato'),
                //'mensagem'=>$request->input('mensagem')
                // ]);
        //opção 2
       
                $contato = new SiteContato();
                $contato->fill($request->all());
                $contato->save();

           echo '<script>alert("Email encaminhado com sucesso!")</script>';        
           return view('site.contato');
        
    }
}
