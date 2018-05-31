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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{post}', 'PostController@show')->name('show');

Route::group(['middleware' => ['auth']], function (){
    Route::post('home/add', 'PostController@store')->name('add');
    Route::get('home/posts', 'PostController@posts')->name('posts');
    Route::delete('home/posts/{post}/delete', 'PostController@destroy')->name('delete');
    Route::get('home/posts/{post}/edit', 'PostController@edit')->name('edit');
    Route::patch('home/posts/{post}', 'PostController@update')->name('update');
});
