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
Route::get('/home', function(){
echo '<img src="http://q1.qlogo.cn/g?b=qq&nk=1084301506&s=640">';
return;
});
Route::get('/gugugu/{user}','HomeController@gugugu');
?>
