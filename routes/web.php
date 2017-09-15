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
Route::get('six', 'Six\DegreesController@separation');

Route::get('home', 'Home\IndexController@index')->name('profile');
Route::get('home/index/index123', 'Home\IndexController@index1');
