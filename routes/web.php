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

// Route::get('/', function () {
//     return 'Ola seja muito bem vindo';
// });

route::get('/',['App\Http\Controllers\PrincipalController'::class,'principal']);

// Route::get('/cliente', function () {
//     return 'Clientes';
// });

route::get('/cliente',['App\Http\Controllers\ClienteController'::class,'cliente']);


// Route::get('/contato', function () {
//     return 'Contato';
// });

route::get('/contato',['App\Http\Controllers\ContatoController'::class,'contato']);
