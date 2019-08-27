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

Route::get('/contato', 'MariController@contato');
Route::get('/redessociais', 'MariController@redesSociais');
Route::get('/formacao', 'MariController@formacao');
Route::get('/experiencias', 'MariController@experiencias');
Route::get('/qualificacoes', 'MariController@qualificacoes');
