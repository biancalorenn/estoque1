<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
/*
use App\Http\Controllers\FornecedorController;
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('produto', 'ProdutosController');
Route::resource('fornecedor', 'FornecedorController');

Route::get('produto/delete/{id}', 'ProdutosController@destroy');
Route::get('/fornecedor/{id}', 'FornecedorController@index');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
