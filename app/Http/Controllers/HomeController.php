<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //web - 例 的控制器部分
    public function index(Request $request) {
        //view的参数指向一个文件 /resources/views/hello.blade.php
        return response()->view('hello');
    }

    public function gugugu(Request $request) {
        $user = $request->user;
return response()->view('gugugu',[
    'user' => $user
]);
    }
        public function web() {
        $qq = '1084301506';
        return response()->view('web_qq',[
            'pp' => $qq
        ]);
    }
}
