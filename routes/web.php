<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

route::get(
    '/',
    ['App\Http\Controllers\PrincipalController'::class, 'principal'])
    ->name('site.index');


route::get(
    '/cliente',
    ['App\Http\Controllers\NosController'::class, 'nos'])
    ->name('site.nos');


route::get(
    '/contato',
    ['App\Http\Controllers\ContatoController'::class, 'contato'])
    ->name('site.contato');
route::post(
    '/contato',
    ['App\Http\Controllers\ContatoController'::class, 'contato'])
    ->name('site.contato');
    
route::get('/login',function (){return 'Login';})->name('site.login');


Route::prefix('/app')->group(function() {
    route::get('/clientes',function (){return 'clientes';})->name('app.clientes');
    route::get('/fornecedores',['App\Http\Controllers\FornecedoresController'::class,'index'])->name('app.fornecedores.index');
    route::get('/produtos',function (){return 'produtos'; })->name('app.produtos');
});

route::get('teste/{p1}/{p2}',['App\Http\Controllers\TesteController'::class,'teste'])->name('site.teste');

route::fallback(function() {
    echo 'Esta pagina nao existe, <a href="'.route('site.index').'">clique aqui</a> para voltar';
});