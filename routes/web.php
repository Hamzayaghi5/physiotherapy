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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => 'checkval'], function() {

Route::get('admin_page', 'AdminController@admin_index')->name('admin');
//*****************************************************************************************************************
Route::get('admin/service/index', 'ServiceController@index');

Route::get('admin/service/create', 'ServiceController@create');

Route::post('admin/service/create', 'ServiceController@store');

Route::get('admin/service/update/{id}', 'ServiceController@edit');

Route::post('admin/service/update/{id}', 'ServiceController@update');

Route::get('admin/service/delete/{id}', 'ServiceController@delete');
//*****************************************************************************************************************
Route::get('admin/contact/index', 'ContactController@index');

Route::get('admin/contact/update/{id}', 'ContactController@edit');

Route::post('admin/contact/update/{id}', 'ContactController@update');

//*****************************************************************************************************************

Route::get('admin/page/index', 'PageController@index');

Route::get('admin/page/create', 'PageController@create');

Route::post('admin/page/create', 'PageController@store');

Route::get('admin/page/update/{id}', 'PageController@edit');

Route::post('admin/page/update/{id}', 'PageController@update');

Route::get('admin/page/delete/{id}', 'PageController@delete');
//*****************************************************************************************************************
Route::get('admin/team/index', 'TeamController@index');

Route::get('admin/team/create', 'TeamController@create');

Route::post('admin/team/create', 'TeamController@store');

Route::get('admin/team/update/{id}', 'TeamController@edit');

Route::post('admin/team/update/{id}', 'TeamController@update');

Route::get('admin/team/delete/{id}', 'TeamController@delete');

//*****************************************************************************************************************
Route::get('admin/testimonial/index', 'TestimonialController@index');

Route::get('admin/testimonial/create', 'TestimonialController@create');

Route::post('admin/testimonial/create', 'TestimonialController@store');

Route::get('admin/testimonial/update/{id}', 'TestimonialController@edit');

Route::post('admin/testimonial/update/{id}', 'TestimonialController@update');

Route::get('admin/testimonial/delete/{id}', 'TestimonialController@delete');

//*****************************************************************************************************************

});
Route::get('/service_single/{id}', 'SiteController@service_single');

Route::get('/team_single/{id}', 'SiteController@team_single');

Route::get('/main/{link}', 'SiteController@get_page');

Route::get('/testimonials', 'SiteController@get_testimonials');


