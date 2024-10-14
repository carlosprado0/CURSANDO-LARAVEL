<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

route::get(
    '/',
    ['App\Http\Controllers\PrincipalController'::class, 'principal']
);


route::get(
    '/cliente',
    ['App\Http\Controllers\ClienteController'::class, 'cliente']
);


route::get(
    '/contato',
    ['App\Http\Controllers\ContatoController'::class, 'contato']
);


route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome = 'Nome não informado',
        int $categoria_id = 1
    ) {
        echo "Olá:$nome - $categoria_id ";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
