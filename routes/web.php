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
    return view('index');
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/price',function(){
    return view('price');
});

Route::get('/singlePost',function(){
    return view('SinglePost');
});

Route::get('/StartProject',function(){
    return view('StartProject');
});

Auth::routes();
// Route::get('/logins', 'LoginController@getlog');
Route::resource('/', 'HomeController');
Route::get('/lang/{local}', 'HomeController@lang');
Route::get('/home', 'HomeController@index')->name('home');

Route::view('pg-admin', 'admin/index')->middleware('auth');
// menus
Route::resource('/pg-admin/menus', 'MenuController')->middleware('auth');
// upload
Route::resource('/pg-admin/upload', 'UploadController')->middleware('auth');
Route::get('/pg-admin/addMedia', 'UploadController@addMedia')->middleware('auth');
Route::get('/pg-admin/selectMedia', 'UploadController@selectMedia')->middleware('auth');
Route::get('/pg-admin/addMediaModal', 'UploadController@addMediaModal')->middleware('auth');

// pages
Route::resource('/pg-admin/pages', 'PageController')->middleware('auth');
Route::get('/pages/{slug}', 'PageController@show');
// show user
Route::resource('/pg-admin/users', 'UserController')->middleware('auth');
//sysVars
Route::resource('/pg-admin/sysVars', 'SysVarController')->middleware('auth');
Route::get('/pg-admin/sysVars_editAsCards', 'SysVarController@editAsCards')->middleware('auth');
Route::put('/pg-admin/sysVars_updateAsCards', 'SysVarController@updateAsCard')->middleware('auth');

// blogs
Route::resource('/pg-admin/blogs', 'BlogController');
Route::get('/blogs', 'BlogController@Indexshow');
Route::get('/blogs/{slug}', 'BlogController@show');

//template
Route::resource('/pg-admin/templateCategories', 'TemplateCategoryController')->middleware('auth');
Route::resource('/pg-admin/templates', 'TemplateController')->middleware('auth');

//login
Route::get('/logins', function(){
    return view('login');
});

