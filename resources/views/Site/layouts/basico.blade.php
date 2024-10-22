<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>MarketPlace - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
        @include('Site.layouts._parcials.menu')
        @yield('conteudo')
    </body>
</html>
