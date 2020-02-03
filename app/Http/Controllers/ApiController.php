<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ApiController extends Controller{
    // API - 例 的控制器部分
    public function hello()
    {
        return response()->json([
            'ret' => 200,
            'desc' => 'success',
            'data' => 'Hello World'
        ]);
    }

    public function home(Request $request)
    {
        return response()->json([
            "ret"=> 200,
            "desc"=> "success",
            "data"=> [
                "result"=> $request->a + $request->b
            ]
        ]);

    }

    public function UserAgent(Request $request)
    {
        return response()->json([
            'ret'=> 200,
            'desc'=> 'success',
            'data'=> [
                "ip"=> $request->ip(),
                "ua"=> $request->header('User-Agent')
            ]
        ]);
    }

   

    public function findip(Request $request)
    {
        return response()->json([
            DB::select("select * from laravel_practice")
        ]);
    }


    public function list(Request $request)
    {
    return response()->json([
        'ret' => 200,
        'desc' => '成功',
        'data' => Post::get()
    ]);
    }

    public function Aphorism(Request $request)
    {
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
        return response()->json([
            'ret'=> 200,
            'desc'=> 'success',
            'data'=> $console
            ]
        );
    }
}




