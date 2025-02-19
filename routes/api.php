<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/services','ServiceController@index_api');


Route::get('/pages','PageController@who_we_are');

Route::get('/contact','ContactController@index_api');

Route::get('/what_we_treat','PageController@what_we_treat');


