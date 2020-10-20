<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
// Route::get('home',function () {
//     return view('todo.index');
// });
Route::get('home','App\Http\Controllers\HomeController@index');
Route::get('home/{todo}','App\Http\Controllers\HomeController@show');

Route::get('createTodo','App\Http\Controllers\HomeController@create');

Route::get('create-new','App\Http\Controllers\HomeController@create_new');

Route::get('home/{todo}/edit','App\Http\Controllers\HomeController@edit');

Route::get('home/{todo}/update_todo','App\Http\Controllers\HomeController@update');

Route::get('home/{todo}/delete','App\Http\Controllers\HomeController@delete');

Route::get('home/{todo}/complete','App\Http\Controllers\HomeController@complete');









