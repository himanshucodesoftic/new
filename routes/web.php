<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register',"App\Http\Controllers\UserController@form");

Route::post('/form',"App\Http\Controllers\UserController@index");


Route::get('/show',"App\Http\Controllers\UserController@show");

Route::get('/{id}',"App\Http\Controllers\UserController@edit");

Route::post('submit/{id}',"App\Http\Controllers\UserController@update");

Route::get('delete/{id}','App\Http\Controllers\UserController@destroy');
