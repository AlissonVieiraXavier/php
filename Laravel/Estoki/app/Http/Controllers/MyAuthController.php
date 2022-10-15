<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credencials = $request->only('email', 'password');
        if(Auth::attempt($credencials)){
            return redirect()->intended('/dashboard')
            ->withSuccess('Signed in');
        }
        
        return redirect("login")->withSuccess('Credenciais de login incorretas!');
    }

    //Register
    public function register()
    {
        return view('auth.register');
    }
    public function customRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique',
            'password' => 'required|',
        ]);
        $data = $request->all();
        $check = $this->create($data);
    }
}
