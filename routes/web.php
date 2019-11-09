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

Route::get('/testing',function(){
    echo "This is testing";
});

Route::view('welcome','welcome');

Route::get('/view', 'WelcomeController@view');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

// This is blog management

Route::get('/blogs','BlogController@index')->name('blog:index');
Route::get('/blogs/create','BlogController@create')->name('blog:create');
Route::post('/blogs/create','BlogController@store')->name('blog:store');


