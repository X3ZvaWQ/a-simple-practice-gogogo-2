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
$aphorism=[
    "I came; I saw; I conquered. ",
    "I have nothing to offer but blood, toil, tear and sweat. ",
    "Youth is not a period of time, it is a state of mind. ",
    "Stay hungry, stay foolish.",
    "A man can be destroyed but not defeated.",
    "There is no shortcuts to success. ",
    "Quitters never win and winners never quit.",
    "Being on sea, sail；being on land, settle.",
    "Life is like a box of chocolates.You never know what you're going to get.",
    "A life without suffering is a life without happiness. ",
    "You only live once, but if you do it right, once is enough.",
    "Man struggles upwards; water flows downwards."
];
$length=count($aphorism);
$randNum=rand(0,($length-1));
$console=$aphorism[$randNum];
$arr=array ('ret'=>200,'desc'=>"success",'date'=>$console);
echo json_encode($arr);
?>
