@extends('template.template')

@section('content')
    <h1 class="text-center">
        @if (isset($cliente)) Editar
        @else
            Cadastrar @endif
    </h1>
    <hr>

    <div class="col-8 m-auto">

        @if (isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{ $erro }}<br>
                @endforeach
            </div>
        @endif

        @if(isset($cliente))
        <form name="formEdit" id="formEdit" method="post" action="{{ url("cliente/$cliente->id") }}">
            @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{ url('cliente') }}">
        @endif
                @csrf
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome: " value="{{old('nome',$cliente->nome ?? '')}}" required ><br>

                <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone:" value="{{old('telefone',$cliente->telefone ?? '')}}"
                    required><br>
                <input class="form-control" type="text" name="email" id="email" placeholder="Email:" value="{{old('email',$cliente->email ?? '')}}" required><br>
                <input class="btn btn-primary" type="submit"  value="@if(isset($cliente)) Editar @else Cadastrar @endif">
            </form>
    </div>
