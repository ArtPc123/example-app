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
    return view('website.home');
});

Route::get('/ajuda', function () {
    return view('website.ajuda');
});

Route::get('/login', function () {
    return view('website.login');
});

Route::get('/registro', function () {
    return view('website.registro');
});

Route::get('/sobre', function () {
    return view('website.sobre');
});

Route::get('/ia', function () {
    return view('website.ia');
});


Route::get('/administrativo/clientes', function () {
    return view('clientes.lista');
});
Route::get('/administrativo/clientes/cadastro', function () {
    return view('clientes.cadastro');
});


Route::prefix('/administrativo')->group(function () {
    Route::get('/', 'App\Http\Controllers\Administrativo\ClientesController@lista');
    Route::get('/cadastro', 'App\Http\Controllers\Administrativo\ClientesController@cadastro');
    Route::get('/cadastro/{id}', 'App\Http\Controllers\Administrativo\ClientesController@cadastro');
    Route::get('/remover/{id}', 'App\Http\Controllers\Administrativo\ClientesController@remover');
    Route::post('/salvar', 'App\Http\Controllers\Administrativo\ClientesController@salvar');
});

