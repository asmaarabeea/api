<?php

use App\Http\Controllers\TasksController;

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



// Route::resource("/users","TasksController" );

Route::group(["middleware" => "auth"], function(){
	Route::get('/', function () {
		return view('welcome');
	});
	
	Route::get('/home', 'HomeController@indexhome');
});

	Auth::routes();
	
	Route::resource("/users","TasksController");
