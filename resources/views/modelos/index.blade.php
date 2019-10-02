@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <form action="{{ route('modelos.store') }}" class="form-horizontal" method="POST">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($modelos as $modelo)
                        <tr>
                            <th scope="row">{{ $modelo->id }}</th>
                            <td>{{ $modelo->modelo }}</td>
                            <td>
                                <a href="{{ route('modelos.show', ['modelo' => $modelo->id]) }}">Visualizar</a>
                                <a href="#">Editar</a>
                                <a href="#">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>        
        </form>
    </div>
</div>
@endsection