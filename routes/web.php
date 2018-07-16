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


/*change user password and name*/
Route::get('/profileShow', 'ProfileUsersController@showChangeUserName');
Route::post('/changeName', 'ProfileUsersController@changeUserName')->name('changeName');
Route::post('/changePassword', 'ProfileUsersController@changeUserPassword')->name('changePassword');



Route::get('/', 'BusinessesController@index');
Route::get('/businesses', 'BusinessesController@show')->middleware('auth');
Route::get('/business/start/{id}', 'BusinessesController@startBusiness')->middleware('auth');
Route::get('/business/{id}', 'BusinessesController@viewBusiness')->middleware('auth');

Route::resource('orders', 'OrdersController');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


/* * routs for socialite * */
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider')->name('soc');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

