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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index');

Auth::routes();

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/home', 'UserController@index')->name('home');
Route::resource('/targets', 'TargetController');
Route::get('/activity', 'ActivityController@index')->name('activity');
Route::get('/activity/load', 'ActivityController@getTargets');
Route::any('/activity/mark/{id}', 'ActivityController@mark');
Route::any('/activity/unmark/{id}', 'ActivityController@unmark');
