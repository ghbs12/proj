<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});


Route::resource('/contatos','App\Http\Controllers\ContatoController');

Route::resource('/calculo_imc','App\Http\Controllers\CalculadoraController');


Route::get('/home','App\Http\Controllers\HomeController@index');

Route::get('/historico','App\Http\Controllers\HistoricoController@index');





Route::get('/loginAdmin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm');
Route::get('/registerAdmin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');

Route::post('loginAdmin',  ['as' => 'loginAdmin', 'uses' =>'App\Http\Controllers\Auth\LoginController@loginAdmin']);
Route::post('registerAdmin', ['as' => 'registerAdmin', 'uses' =>'App\Http\Controllers\Auth\RegisterController@createAdmin']);


Auth::routes();

