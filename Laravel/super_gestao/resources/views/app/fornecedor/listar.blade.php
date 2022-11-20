@extends('app.layouts.basico')

@section('titulo', 'Fornecedor - Listar')

@section('content')
    <div class="conteudo-pagina">
        <h1 class="titulo-pagina">
            <p>Fornecedor - Listar</p>
        </h1>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
                <li><a href="{{route('app.fornecedor')}}">consulta</a></li>
            </ul>
        </div>
    </div>
    <div class="informacao-pagina">
        <table>
            <thead>
                 <th>Nome</th>
                 <th>site</th>
                 <th>uf</th>
                 <th>email</th>
                 <th></th>
                 <th></th>
            </thead>
            <tbody>
            @foreach ($fornecedor as $atributo)
                <tr>
                    <td>{{$atributo->nome}}</td>
                    <td>{{$atributo->site}}</td>
                    <td>{{$atributo->uf}}</td>
                    <td>{{$atributo->email}}</td>
                    <td> <a href="#">Excluir</a></td>
                    <td> <a href="{{route('app.fornecedor.editar', $atributo->id)}}">Editar</a></td>
                </tr>    
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
