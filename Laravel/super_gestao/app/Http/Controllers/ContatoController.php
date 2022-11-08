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
                'name'=> ['required','min:3','unique:site_contatos'],
                'email'=> ['email'],
                'telefone'=> ['required'],
                'motivo_contato'=>  ['required'],
                'mensagem'=> ['required']
        ],
        [
            'name.required' => 'O nome não pode estar em branco chefia',
            'name.min:3'=>'no minimo 3 caracteres para eu considerar um nome',
            'unique:site_contatos' => 'nome repedido não vale rsrs',
            'email' => 'você chama isso de email?',
            'telefone'=>'numero?',
            'motivo_contato' => 'ta mandando email porque?',
            'mensagem'=>'não tenho bola de cristal, me explique o que quer?'
        ]
    );
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

           return redirect()->route('site.index');
        
    }
}
