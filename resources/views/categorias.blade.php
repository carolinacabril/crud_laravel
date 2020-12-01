@extends('layout.app', ["current" => "categorias"])
@section('body')

<div class="card border mt-3">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>
@if(count($categorias) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
@foreach($categorias as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->nome }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/categorias/editar/{{ $cat->id }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="/categorias/excluir/{{ $cat->id }}">Excluir</a>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/categorias/novo" class="btn btn-primary btn-sm">Adicionar nova categoria</a>
    </div>
</div>
@endsection


