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
// Route::post('/insert', 'Controller@insert');
Auth::routes();

Route::post('/task', 'TaskController@index');
Route::get('/tasks', 'TaskController@create');


// Route::delete('/task/{task}', 'TaskController@destroy');

// Route::post('/home', 'HomeController@index')->name('home');
