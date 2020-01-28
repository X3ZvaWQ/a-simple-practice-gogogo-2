<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    //web - 例 的控制器部分
    public function index(Request $request) {
        //view的参数指向一个文件 /resources/views/hello.blade.php
   
        return '哎呀api-III我都把百度搜烂了也不会所以就摸鱼了，有时间一定继续钻研咕咕咕咕（x' ;
      
    }
}
