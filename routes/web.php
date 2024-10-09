<?php

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

Route::get('/', function () {
    return 'Ola seja muito bem vindo';
});

Route::get('/cliente', function () {
    return 'Clientes';
});

Route::get('/contato', function () {
    return 'Contato';
});