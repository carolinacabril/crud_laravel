@extends('layout.app', ["current" => "produtos"])
@section('body')
<div class="card border mt-3">
    <div class="card-body">
        <form action="/produtos/{{ $produtos->id }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="nomeProduto" id="nomeCategoria" placeholder="Nome do produto" value="{{ $produtos->nome }}" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Quantidade em estoque" value="{{ $produtos->estoque }}" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="precoProduto" id="precoProduto" placeholder="Preço do produto" value="{{ $produtos->preco }}" required>
            </div>
            <button type="sunmit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection