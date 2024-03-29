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

Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/Faqs','FaqsController@index');
Route::group(['middleware' => 'web'], function () {
/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/Profile','ProfileController@index');
Route::get('/Game','GameController@index');
Route::post('/Game','GameController@NextQuestion');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

});