@extends('layouts.auth')
@section('title','Login')
@section('content')
    
<h3 class="card-header text-center">Login</h3>
                  
<form method="POST" action="{{ route('login.custom') }}">
    @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="Email" id="email"
             class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
        </div>
        <div class="form-group mb-3">
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                   <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
        </div>
            <div class="form-group mb-3">
                <div class="checkbox">
                    <label>
                    <input type="checkbox" name="remember"> Lembre de mim
                    </label>
                </div>
                </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Logar</button>
                        <a href="{{route('register-user') }}"> Registrar </a>
                    </div>
</form>
@endsection()