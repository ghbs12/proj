<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/calculo_imc', function () {
    return view('calculo_imc');
})->middleware(['auth']);

Route::get('/tarefas', function () {
    return view('tarefas');
})->middleware(['auth']);

Route::get('/usuario', function () {
    return view('usuario');
})->middleware(['auth']);



Route::get('/loginAdmin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm');
Route::get('/registerAdmin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');

Route::post('loginAdmin',  ['as' => 'loginAdmin', 'uses' =>'App\Http\Controllers\Auth\LoginController@loginAdmin']);
Route::post('registerAdmin', ['as' => 'registerAdmin', 'uses' =>'App\Http\Controllers\Auth\RegisterController@createAdmin']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('homeAdmin', ['as' => 'homeAdmin', 'uses' => 'App\Http\Controllers\HomeAdminController@index']);
