@extends('layout.app', ["current" => "categorias"])
@section('body')
<div class="card border mt-3">
    <div class="card-body">
        <form action="/categorias" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Digite o nome da categoria">
            </div>
            <button type="sunmit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection