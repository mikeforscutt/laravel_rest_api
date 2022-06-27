<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('authors', 'AuthorController@index');
Route::get('authors/{author}', 'AuthorController@show');
Route::put('authors/{author}', 'AuthorController@update');
Route::patch('authors/{author}', 'AuthorController@update');
Route::post('authors', 'AuthorController@store');
Route::delete('authors/{author}', 'AuthorController@destroy');

Route::get('books', 'BookController@index');