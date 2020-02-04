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
    $trace = Trace::find($id)->first();
    if(empty($trace)){
        return response()->json([
            'ret' => '1002',
            'desc' => '无浏览记录',
            'data' => null
        ]);
    }else{
    $trace->delete();
    return response()->json([
        'ret' => 200,
        'desc' => '成功删除信息',
        'data' => null
    ]);
    }
}

public function User_Agent(Request $request)
{
    $id = $request->ip();
    $ua = $request->header("User-Agent");
    if(empty($id) || empty($ua)) {
        return response()->json([
            'ret' => '1001',
            'desc' => '缺少参数',
            'data' => null
        ]);
    }
    $trace = new TraceController;
    $trace->id = $id;
    $trace->ua = $ua;
    $trace->save();
    return response()->json([
        "ip"=> $request->ip(),
        "ua"=> $request->header('User-Agent')
    ]);
}

public function SelectHistory(Request $request)
{
    $name = $request->id;
    $ua = $request->ua;
    $trace= Trace::find($id)->first();
    $trace2= Trace::find($ua)->first();
    if(empty(trace)){
        return response()->json([
            'ret' => '1002',
            'desc' => '无浏览记录',
            'data' => null
        ]);
    }else{
        return response()->json([
            $trace
        ]);
    }
    if(empty(trace2)){
        return response()->json([
            'ret' => '1002',
            'desc' => '无浏览记录',
            'data' => null
        ]);
    }else{
        return response()->json([
            $trace
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
