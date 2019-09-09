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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController')->middleware('auth');
Route::resource('users', 'UserController')->middleware('auth');

Route::get('/products/{id}/data', 'DataController@create')->name('data.create');
Route::post('/products/{id}/data', 'DataController@store')->name('data.store');

Route::get('/users', 'UserController@index')->name('user')->middleware(['auth','admin']);

Route::get('/users/{id}/data', 'DataController@create')->name('data.create');
Route::post('/products/{id}/data', 'DataController@store')->name('data.store');

Route::get('/notauth', function () {
    return view('notauth');
})->name('notauth');