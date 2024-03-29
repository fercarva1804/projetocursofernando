<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Essa aplicação é a primeira de testes da turma do curso de Laravel 09/09 a 13/09.";
});

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/helloword', "TesteController@index");

Route::get('/helloword{nome}', "TesteController@index2");
