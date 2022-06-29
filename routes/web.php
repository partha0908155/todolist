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
Route::get('/todolist', 'App\Http\Controllers\TodoController@index')->name('todolist');
Route::post('/todolist-create', 'App\Http\Controllers\TodoController@create')->name('todolist-create');
Route::delete('/todolist-delete/{id}', 'App\Http\Controllers\TodoController@delete')->name('todolist-delete');
Route::post('/todolist-completed/{id}', 'App\Http\Controllers\TodoController@completed')->name('todolist-completed');
