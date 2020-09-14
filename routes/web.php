<?php

use App\Logic\TahaqqSessionInfo;
use App\Model\Menu;
use Facade\FlareClient\Api;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Logic\SysVar\SysVarTypes;
use App\Logic\SysVar\SysVarLogic;
use Illuminate\Support\Facades\App;

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
Route::get('/pg-admin/sysVars_editAsCards/{type}', 'SysVarController@editPerType')->middleware('auth');
Route::put('/pg-admin/sysVars_updateAsCards', 'SysVarController@updateAsCard')->middleware('auth');

// blogs
Route::resource('/pg-admin/blogs', 'BlogController');
Route::get('/blogs', 'BlogController@Indexshow');
Route::get('/blogs/{slug}', 'BlogController@show');
Route::post('/pg-admin/pinBlogToSlide/{id}', 'BlogController@pinToSlider' );


//template
Route::resource('/pg-admin/templateCategories', 'TemplateCategoryController')->middleware('auth');
Route::resource('/pg-admin/templates', 'TemplateController')->middleware('auth');
Route::get('/template', 'TemplateController@viewTemplate');
Route::get('/viewTemplateCatecory/{idCatecory}','TemplateController@viewTemplateCatecory');
Route::get('/template/{id}','TemplateController@getOneTemplate');
Route::get('/getOneTemplateAjax/{id}','TemplateController@getOneTemplateAjax');
Route::get('/testTemplateSelecotr','TemplateController@testTemplateSelector');
// Route::get('/getOneTemplate/{id}','TemplateController@show');


//login
// Route::get('/TahqqLogin', function(){
//     return view('login');
// });



// TahqqRegistration تسجيل مشترك جديد
Route::get('/TahqqRegistration', 'TahqqRegistrationController@show');
Route::post('/TahqqRegistration', 'TahqqRegistrationController@store');
Route::post('/SaveClientProjectInfo', 'TahqqRegistrationController@SaveClientProjectInfo');
Route::post('/PlanSelected', 'TahqqRegistrationController@StartNowToWhmcs');

Route::get('/TahqqLogin', 'TahqqRegistrationController@loginView');
Route::post('/TahqqLogin', 'TahqqRegistrationController@login');
Route::get('/TahqqLogout', 'TahqqRegistrationController@logout');

// رابط مؤقت لتسجيل
Route::get('/tahqqnew', 'TahqqRegistrationController@newregister');


// Contact us
Route::resource('/pg-admin/Contactus', 'ContactusController');
Route::get('Contactus','ContactusController@viewAll');
Route::get('/pg-admin/readcontact/{id}','ContactusController@show');




