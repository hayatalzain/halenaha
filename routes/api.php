<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register','api\RegisterController@regisret');
//Route::get('get/color','NewOrdersController@getColor')->name('get.color');
Route::post('login','api\LoginController@index');
Route::middleware('auth:api')->post('logout','api\LoginController@logout');
