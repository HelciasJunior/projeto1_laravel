@extends('layouts.app')

@section('content')    
    <div class="container">
        <div class="col-md-12">
            <form action="{{ route('modelos.store') }}" class="form-horizontal" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label for="">Modelo do veículo</label>
                        <input type="text" class="form-control" name="modelo">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="">Modelo do veículo</label>
                        <select class="form-control" name="status">
                            <option value="ativo">ativo</option>
                            <option value="inativo">inativo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn-default">Cadastrar modelo</button>
                </div>
            </form>
        </div>
    </div>
@endsection