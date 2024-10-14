<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

route::get(
    '/',
    ['App\Http\Controllers\PrincipalController'::class, 'principal'])
    ->name('site.index');


route::get(
    '/cliente',
    ['App\Http\Controllers\ClienteController'::class, 'nos'])
    ->name('site.nos');


route::get(
    '/contato',
    ['App\Http\Controllers\ContatoController'::class, 'contato'])
    ->name('site.contato');

route::get('/login',function (){return 'Login';})->name('site.login');

route::prefix('/app')->group(function() {
route::get('/clientes',function (){return 'clientes';})->name('app.clientes');
route::get('/fornecedores',function (){return 'fornecedores';})->name('app.fornecedores');
route::get('/produtos',function (){return 'produtos'; })->name('app.produtos');
});

route::get('/rota1',function (){
    return 'rota 1'; 
})->name('site.rotas1');

route::get('/rota2',function (){
    return redirect()->route('site.total'); 
})->name('site.rotas2');
//route::redirect('rota2','/rota1');

route::fallback(function() {
    echo 'Esta pagina nao existe, <a href="'.route('site.index').'">clique aqui</a> para voltar';
});