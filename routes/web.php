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
$qq = 1084301506;
echo '<img src="'.'http://q1.qlogo.cn/g?b=qq&nk='.$qq.'&s=640&t='. time() .'">';
?>

