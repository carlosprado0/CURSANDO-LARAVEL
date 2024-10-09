<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get(
    '/',['App\Http\Controllers\PrincipalController'::class,'principal']
);


route::get(
    '/cliente',['App\Http\Controllers\ClienteController'::class,'cliente']
);


route::get(
    '/contato',['App\Http\Controllers\ContatoController'::class,'contato']
);


route::get(
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
 function(
    string $nome = 'Nome não informado',
    string $categoria = 'Categoria desconhecida',
    string $assunto = 'Sem assunto',
    string $mensagem = 'Sem mensagem'
    )   {

    echo "Olá:$nome - $categoria - $assunto - $mensagem";

        }
);
//Parametros e parametros opcionais ^
//           |
             