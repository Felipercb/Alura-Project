<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /></head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger d-flex justify-content-between">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('listar_series') }}">
                <i class="fas fa-home"></i>
            </a>
            @auth
                <a class="navbar-brand text-white" href="/sair">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            @endauth

            @guest
                <a class="navbar-brand text-white" href="/entrar">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
            @endguest
        </div>
    </nav>

    <div class="container bg-dark rounded-bottom">
        <div class="jumbotron">
            <h1 class="text-danger display-5">@yield('cabecalho')</h1>
        </div>

        @yield('conteudo')
    </div>
</body>
</html>