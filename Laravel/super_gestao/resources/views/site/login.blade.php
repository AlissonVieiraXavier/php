@extends('site.layouts.basico')
@section('title','Login')


@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div>
                <form action={{ route('login.auth') }} method="post">
                    @csrf
                    <input name="usuario" value="{{old('usuario')}}" type="text" placeholder="Usuário">
                    <input name="senha" value="{{old('senha')}}" type="password" placeholder="Senha">
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
            </div>
        </div>
        @if($errors->any())
        <div class="error_div">
            <ul>
                @foreach ($errors->all() as $error) 
                    <li> {{  $error  }} </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>


   
@endsection
