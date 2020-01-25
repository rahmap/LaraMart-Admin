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

Route::get('/', 'DashboardController@main');
Route::get('/dashboard', 'DashboardController@main');
Route::get('/home', 'DashboardController@home');
Route::get('/list-user', 'DashboardController@listUser')->name('list-user');

Auth::routes(['register' => false]);

