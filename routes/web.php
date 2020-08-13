<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::resource('/', 'HomeController');
Route::get('/lang/{local}', 'HomeController@lang');
Route::get('/home', 'HomeController@index')->name('home');

Route::view('pg-admin', 'admin/index');
Route::resource('/pg-admin/menus', 'MenuController');
Route::resource('/pg-admin/upload', 'UploadController');
Route::get('/pg-admin/addMedia', 'UploadController@addMedia');
Route::get('/pg-admin/selectMedia', 'UploadController@selectMedia');
// pages
Route::resource('/pg-admin/pages', 'PageController');
Route::get('/pages/{slug}', 'PageController@show');

Route::resource('/pg-admin/users', 'UserController');



