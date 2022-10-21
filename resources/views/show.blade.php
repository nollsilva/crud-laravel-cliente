@extends('template.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
       
        Nome: {{$cliente->nome}}<br>
        Telefone: {{$cliente->telefone}}<br>
        Email: {{$cliente->email}}<br>
    </div>
@endsection