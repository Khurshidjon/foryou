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

Route::get('/', 'TankController@index')->name('index');
Route::get('/saletank', 'TankController@create')->name('saletank');
Route::post('/create/tank', 'TankController@store')->name('create.tank');
Route::get('/buytank', 'TankController@buy')->name('store');
