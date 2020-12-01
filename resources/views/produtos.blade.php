@extends('layout.app', ["current" => "produtos"])
@section('body')

<div class="card border mt-3">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
@if(count($produtos) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Código Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
@foreach($produtos as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->nome }}</td>
                    <td>{{ $prod->estoque }}</td>
                    <td>{{ $prod->preco }}</td>
                    <td>{{ $prod->id_categoria }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/produtos/editar/{{ $prod->id }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="/produtos/excluir/{{ $prod->id }}">Excluir</a>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-primary btn-sm">Adicionar novo produto</a>
    </div>
</div>
@endsection
