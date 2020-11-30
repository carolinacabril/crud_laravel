<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav ml-auto">
    <li @if($current === "home") class="nav-item font-weight-bolder active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home</span></a>
      </li>
      <li @if($current === "produtos") class="nav-item font-weight-bolder active" @else class="nav-item" @endif>
        <a class="nav-link" href="/produtos">Produtos</span></a>
      </li>
      <li @if($current === "categorias") class="nav-item font-weight-bolder active" @else class="nav-item" @endif>
        <a class="nav-link" href="/categorias">Categorias</span></a>
      </li>
    </ul>
  </div>
</nav>