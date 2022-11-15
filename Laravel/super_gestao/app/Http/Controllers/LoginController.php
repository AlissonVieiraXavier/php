<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = $request->get('erro');
        return view('site.login',['erro' => $erro]);
    }
    public function auth(Request $request)
    {   
    $request->validate([
        'usuario' => 'email',
        'senha' => 'required'
    ], [
        'usuario.email' =>'sem usuario não tem como prosseguir',
        'senha.required' => 'senha?'
    ]);

    //verificando se o usuario existe na base
    $email = $request->get('usuario');
    $password = $request->get('senha');
    
    $user = new User();
    $usuario = $user->where('email', $email)->where('password',$password)->get()->first();

    if(isset($usuario->name)){
        session_start();
        $_SESSION['name'] = $usuario->name;
        $_SESSION['email'] = $usuario->email;
        
        return redirect()->route('app.home');
    }else{
        return redirect()->route('login.index',['erro' => 1]);
    }
    //echo '<pre>';
    //print_r($usuario);
    //echo '</pre>';
   }

    public function sair()
    {
        session_destroy();
        return redirect()->route('site.index');
    }


}