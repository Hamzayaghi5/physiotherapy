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

// Route::get('/', function () {
//     return view('main_site.index');
// });

Route::get('/', 'SiteController@index');

Route::get('/service_single/{id}', 'SiteController@service_single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => 'checkval'], function() {

Route::get('admin_page', 'AdminController@admin_index')->name('admin');
//***************************************************************************************************************************
Route::get('admin/service/index', 'ServiceController@index');

Route::get('admin/service/create', 'ServiceController@create');

Route::post('admin/service/create', 'ServiceController@store');

Route::get('admin/service/update/{id}', 'ServiceController@edit');

Route::post('admin/service/update/{id}', 'ServiceController@update');

Route::get('admin/service/delete/{id}', 'ServiceController@delete');
//***************************************************************************************************************************
Route::get('admin/contact/index', 'ContactController@index');

Route::get('admin/contact/update/{id}', 'ContactController@edit');

Route::post('admin/contact/update/{id}', 'ContactController@update');
});