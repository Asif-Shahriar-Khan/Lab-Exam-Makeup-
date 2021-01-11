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

/*Route::get('/', function () {
    return view('register');
});*/
Route::get('/', 'App\Http\Controllers\homeController@index')->name('home.index');
Route::get('/login', 'App\Http\Controllers\loginController@index')->name('login.index');
Route::post('/login', 'App\Http\Controllers\loginController@verify')->name('login.verify');
Route::get('/create', 'App\Http\Controllers\homeController@create')->name('home.create');
Route::post('/store', 'App\Http\Controllers\homeController@store')->name('home.store');
Route::get('/users', 'App\Http\Controllers\homeController@show')->name('user.show');
Route::get('/home', 'App\Http\Controllers\homeController@index')->name('home.index');
Route::get('/logout', 'App\Http\Controllers\logout@index')->name('logout.index');
Route::get('/changepassword', 'App\Http\Controllers\homeController@changepass')->name('home.changepass');
