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

Route::get('contact', function() {
	return view('contact');
});


Route::get('about', function() {
	return view('about');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('ID/{id}', function($id) {
    //
    echo 'ID of user: '.$id;
});



Route::get('/user/{name?}', function($name = 'Ramon') {
    //
    echo 'Name: '.$name;
});

Route::get('role', [
	'middleware' => 'Role:editor',
	'uses' => 'TestController@index',
    //
]);

Route::post('foobar', function () {
	return 'Hi there';
});
