<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\Post\Trace;

class TraceController extends Controller
{
    public function delete(Request $request)
{
    
    $ip = $request->ip;
    $trace = Trace::where('ip',$ip)->get();
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
    $ip = $request->ip();
    $ua = $request->header("User-Agent");
    $trace = new Trace;
    $trace->ip = $ip;
    $trace->ua = $ua;
    $trace->save();
    return response()->json([
        "ip"=> $request->ip(),
        "ua"=> $request->header('User-Agent')
    ]);
}

public function SelectHistory(Request $request)
{
    $ip = $request->ip;
    $ua = $request->ua;
    $trace= Trace::where('ip',$ip)->orWhere('ua',$ua)->get(); 
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
}
public function findip(Request $request)
    {
        return response()->json([
            DB::select("select * from laravel_practice")
        ]);
    }
}
