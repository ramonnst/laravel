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

Route::get('contact', 'PagesController@getContact');


Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

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
