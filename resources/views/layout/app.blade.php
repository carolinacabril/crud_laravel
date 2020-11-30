<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
</head>
<body>
    <div class="container">
       <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
       </main>
    </div>
    <script src="{{ asset('site/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('site/bootstrap.js') }}" type="text/javascript"></script>
</body>
</html>