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
	Route::resource('users', 'UserController')->middleware(['auth','admin']);

	Route::get('users/create', 'UserController@create')->name('users.create');
	Route::post('users', 'UserController@store')->name('users.store');

	Route::post('/user/{id}/photos','UserController@store_image')->name('photo.store');
	Route::get('user/{id}', 'UserController@show');

	Route::get('/products/{id}/data', 'DataController@create')->name('data.create');
	Route::get('/products/data/{data}', 'DataController@edit')->name('data.edit');
	Route::delete('/products/{data}/data', 'DataController@destroy')->name('data.destroy');
	Route::get('/products/{data}/data', 'DataController@show')->name('data.show');
	Route::post('/products/{id}/data', 'DataController@store')->name('data.store');

	Route::get('/options/{product}/create', 'OptionController@create')->name('options.create');
	Route::post('/products/{product}/options', 'OptionController@store')->name('options.store');
	Route::delete('/products/{option}/destroy', 'OptionController@destroy')->name('options.destroy');
	Route::get('/options/{option}/show', 'OptionController@show')->name('options.show');
	

	

	Route::get('/notauth', function () {
	    return view('notauth');
	})->name('notauth');