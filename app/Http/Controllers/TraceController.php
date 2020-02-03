<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\Post\Trace;

class TraceController extends Controller
{
    public function delete(Request $request)
{
    
    $id = $request->id;
    $post = Trace::find($id)->first();
    if(empty($post)){
        return response()->json([
            'ret' => '1002',
            'desc' => '无浏览记录',
            'data' => null
        ]);
    }
    $post->delete();
    return response()->json([
        'ret' => 200,
        'desc' => '成功删除信息',
        'data' => null
    ]);
}

public function User_Agent(Request $request)
{
    $myip = $request->ip();
    $myua = $request->header("User-Agent");
    if(empty($myip) || empty($myua)) {
        return response()->json([
            'ret' => '1001',
            'desc' => '缺少参数',
            'data' => null
        ]);
    }
    $post = new TraceController;
    $post->myip = $myip;
    $post->myua = $myua;
    $post->save();
    return response()->json([
        "ip"=> $request->ip(),
        "ua"=> $request->header('User-Agent')
    ]);
}

public function SelectHistory(Request $request)
{
    $name = $request->id;
    $post= Trace::find($id)->first();
    if(empty(post)){
        return response()->json([
            'ret' => '1002',
            'desc' => '无浏览记录',
            'data' => null
        ]);
    }else{
        return response()->json([
            $post
        ]);
    }
    if(empty(post2)){
        return response()->json([
            'ret' => '1002',
            'desc' => '无浏览记录',
            'data' => null
        ]);
    }else{
        return response()->json([
            $post
        ]);
    }

}
public function findip(Request $request)
    {
        return response()->json([
            DB::select("select * from laravel_practice")
        ]);
    }
}
