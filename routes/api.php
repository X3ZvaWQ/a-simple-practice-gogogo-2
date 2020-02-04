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

// API - 例 的路由部分
Route::post('/hello', 'ApiController@hello');

Route::post('/home', 'HomeController@home');

Route::group(['prefix' => 'post', 'namespace' => 'Api'], function () {
    Route::post('add', 'PostController@add');//增
    Route::post('list', 'PostController@list');//查
    Route::post('delete', 'PostController@delete');//删
    Route::post('modify', 'PostController@modify');//改
    Route::post('connect','PostController@connect');//合并
});
