@extends('layouts.main')
@section('title','Welcome my friend')
@section('content')       

        <h1>Hello World</h1> 
        @if(100>200)
         <p>a condição é true, {{$nome}}</p>
        @else
         <p>a condição é falsa, {{$nome}}</p>
        @endif
        <a href="/produtos">ir la</a>

@endsection