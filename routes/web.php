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

Route::get('/', 'PostController@index')->name('index');
Route::group(['prefix' => 'story'], function (){
    Route::get('/{id?}', 'PostController@single')->name('single-post')->where('id', '[0-9]+');
    Route::put('/{id?}', 'PostController@update');
    Route::delete('/{id?}', 'PostController@delete');
    Route::post('/', 'PostController@create');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


