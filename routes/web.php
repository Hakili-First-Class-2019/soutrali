<?php

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

Route::get('/home', function () {
    return view('index');
 });
 Route::get('/', 'HomeController@index')->name('home');

Route::get('index', function () {
    return view('index');
});
Route::get('examples/profile', function () {
    return view('examples.profile');
});
Route::get('examples/login', function () {
    return view('examples.login');
});
Route::get('examples/register', function () {
    return view('examples.register');
});
Route::get('create','MembreController@create')->name('examples.register');
Route::post('store','MembreController@store')->name('examples.store');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
