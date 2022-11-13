<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
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
    $name = $request->get('usuario');
    $password = $request->get('senha');
    
    $user = new User();
    $usuario = $user->where('email', $name)->where('password',$password)->get()->first();

    echo '<pre>';
    print_r($usuario);
    echo '</pre>';
   }
}