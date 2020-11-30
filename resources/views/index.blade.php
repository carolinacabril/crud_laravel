@extends('layout.app', ["current" => "home"])
@section('body')
<div class="jumbotron border border-secondary">
  <div class="row">
    <div class="card-deck">
        <div class="card border border-primary">
            <div class="card-body">
                <h5 class="card-title">Cadastro de Produtos</h5>
                <p class="card-text">Aqui você cadastra os produtos, não esqueça de cadastrar as categorias.</p>
                <a href="/produtos" class="btn btn-sm btn-primary">Cadastrar produtos</a>
            </div>
        </div>
        <div class="card border border-primary">
            <div class="card-body">
                <h5 class="card-title">Cadastro de Categorias</h5>
                <p class="card-text">Aqui você cadastra as categorias relacionadas aos seus produtos.</p>
                <a href="/categorias" class="btn btn-sm btn-primary">Cadastrar categorias</a>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection