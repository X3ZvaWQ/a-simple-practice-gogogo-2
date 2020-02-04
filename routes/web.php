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

Route::get('/', function () {
    return view('welcome');
});

//web - 例 的路由部分
Route::get('/home', 'HomeController@index');
Route::get('/gugugu/{user}','HomeController@gugugu');
Route::get('/web','HomeController@web');

Route::get('/web_picture/add','HomeController@add');

Route::post('/web_picture/store','HomeController@store');

Route::get('/web_picture/edit','HomeController@edit');

Route::post('/web_picture/update','HomeController@update');

Route::get('/web_picture/index','HomeController@WebIndex');