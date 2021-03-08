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

Route::get('/', 'App\Http\Controllers\MainController@main');
//Route::get('/sotr', 'App\Http\Controllers\MainController@sotr')->name('sotr');
//Route::get('/search', 'App\Http\Controllers\MainController@search')->name('search');


Auth::routes();
Route::resource('employs', 'App\Http\Controllers\MainController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
