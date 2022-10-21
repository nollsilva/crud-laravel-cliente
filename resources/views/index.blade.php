@extends('template.template')

@section('content')
    <h1 class="text-center">Cliente</h1>
    <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{ url('cliente/create') }}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($clientes as $cliente)
                    <tr>
                        <th id="cliente_id" scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>

                            <a href="{{ url("cliente/$cliente->id") }}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>

                            <a href="{{ url("cliente/$cliente->id/edit") }}">
                                <button class="btn btn-primary">Editar</button>
                            </a>

                            <button class="btn btn-danger" id="del" >Deletar</button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
