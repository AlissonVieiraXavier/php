@extends('app.layouts.basico')

@section('titulo', 'Fornecedor - Adicionar')

@section('content')

<div class="conteudo-pagina">
    <h1 class="titulo-pagina">
        <p>Fornecedor - Adicionar</p>
    </h1>
    <div class="menu">
        <ul>
            <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
            <li><a href="{{route('app.fornecedor')}}">consulta</a></li>
        </ul>
    </div>
</div>
<div class="informacao-pagina">
     <div>
        <form action="{{route('app.fornecedor.adicionar')}}" method="post">+
            @csrf
            <input type="text" class="borda-preta" value="{{$fornecedor->nome ?? old('nome')}}" name="nome" placeholder="Nome">
            {{$errors->has('nome') ? $errors->first('nome') : '' }}
            <input type="text" class="borda-preta" value="{{$fornecedor->site ?? old('site')}}" name="site" placeholder="Site">
            {{$errors->has('site') ? $errors->first('site') : '' }}
            <input type="text" class="borda-preta" value="{{$fornecedor->email ?? old('email')}}" name="email" placeholder="email">
            {{$errors->has('email') ? $errors->first('email') : '' }}
            <input type="text" class="borda-preta" value="{{$fornecedor->uf ?? old('uf')}}" name="uf" placeholder="UF">
            {{$errors->has('uf') ? $errors->first('uf') : '' }}
        <button type="submit" class="borda-preta"> Pesquisar </button>
        </form>
     </div>
</div>

@endsection