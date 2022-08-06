@extends('layouts.app')

@section('content')
<header>
        <div class="nav">
            <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
            Document Register
            </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
                </label>
            </div>
            
            <div class="nav-links">
                <a href="/home" target="_blank">Home</a>
                <a href="/novo" target="_blank">Registrar novo</a>
                <a href="/documentos" target="_blank">Documentos armazenados</a>
                <a href="/duvidas" target="_blank">Duvidas e suporte</a>
            </div>
            </div>
    </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
        
</div>
</div>


@endsection
