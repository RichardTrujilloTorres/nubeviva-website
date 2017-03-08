<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('component', function() {
	return view('dummy');
});




// Route::group([
// 	'prefix' => 'casts',
// 	'as' => 'casts.',
// 	'namespace' => 'App\\Http\\Controllers\\Casts',
// 	], function() {


// 	Route::get('/', 'CastsController@index');


// });

/**
* Casts
*/
Route::resource('/casts', 'CastsController');


Auth::routes();

Route::get('/home', 'HomeController@index');
