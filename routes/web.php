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
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/sobre', 'SobreController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contato', function(){
    return view('contato');
});
Route::get('/produtos', function(){
    return view('produtos');
});
Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/cadastro', function(){
    return view('cadastro');
});
Route::get('/recov', function(){
    return view('recov');
});
Route::post('/obrigado', function(){
    return view('obrigado');
});

Route::post('/enviar', 'ContatoController@enviaContato');

Route::post('/home', 'RegistroMailController@enviaRegistro');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
