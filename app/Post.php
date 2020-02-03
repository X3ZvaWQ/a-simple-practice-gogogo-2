<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\Post;

class Post1 extends Model
{
    public function delete(Request $request)
{
    
    $id = $request->id;
    $post = Post1::find($id);
    if(empty($post)){
        return response()->json([
            'ret' => '1002',
            'desc' => '找不到该文章',
            'data' => null
        ]);
    }
    $post->delete();
    return response()->json([
        'ret' => 200,
        'desc' => '成功',
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
    $post = new POST1;
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
    $ua = $request->Useragent;
    $post= Post1::find($name);
    $post2= Post1::find($ua);
    if(empty(post)){
        return response()->json([
            'ret' => '1002',
            'desc' => '找不到记录',
            'data' => null
        ]);
    }else{
        return response()->json([
            'ip'=>$name,
            'useragent'=>$ua
        ]);
    }
    if(empty(post2)){
        return response()->json([
            'ret' => '1002',
            'desc' => '找不到记录',
            'data' => null
        ]);
    }else{
        return response()->json([
            'ip'=>$name,
            'useragent'=>$ua
        ]);
    }

}

}
