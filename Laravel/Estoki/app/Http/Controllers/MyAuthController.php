<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            return redirect()->intended('dashboard')->withSuccess('Signed in');
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
            'email'=> 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        //
        $credencials_register = $request->only('email', 'password');
            if(Auth::attempt($credencials_register)){
                return redirect()->intended('dashboard')->withSuccess('Signed in');
            }
       
        return redirect("dashboard")->withSuccess("Você efetuou o login");
    }

    //Create

    public function create(Array $data)
    {
        Return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
    }

    //Dashboard
     
    public function dashboard()
    {
        if(Auth::check()){
           return view('auth.dashboard');
        }
     return redirect('login')
        ->withSuccess('Você esta deslogado,
         favor efetue o login novamente para ter acesso a 
         seu Dashboard');   
    }
    
    //Sign-out
    public function signOut()
    {
       // Session::flush();
        Auth::logout();
        return redirect('login');
    }
}

