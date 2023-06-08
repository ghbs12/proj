<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::resource('/calculo_imc','App\Http\Controllers\CalculadoraController');


Route::get('/home','App\Http\Controllers\HomeController@index');


Route::get('/usuario', function () {
    return view('usuario');
})->middleware(['auth']);

Route::get('historico', function () {
    return view('historico');
})->middleware(['auth']);



Route::get('/loginAdmin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm');
Route::get('/registerAdmin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');

Route::post('loginAdmin',  ['as' => 'loginAdmin', 'uses' =>'App\Http\Controllers\Auth\LoginController@loginAdmin']);
Route::post('registerAdmin', ['as' => 'registerAdmin', 'uses' =>'App\Http\Controllers\Auth\RegisterController@createAdmin']);


Auth::routes();

