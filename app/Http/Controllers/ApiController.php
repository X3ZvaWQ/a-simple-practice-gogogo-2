<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // API - 例 的控制器部分
    public function hello() 

    {
        return response()->json([
            'ret' => 200,
            'desc' => 'success',
            'data' => '哎呀api-III我都把百度搜烂了也不会所以就摸鱼了，有时间一定继续钻研咕咕咕咕（x'
        ]);        
    }
}    