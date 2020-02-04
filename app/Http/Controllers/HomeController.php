<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Web_picture;

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
    public function add(){
        return view('web_picture_add');
    }
    public function store(Request $request){
        $input = $request -> except('_token');
        $href = Web_picture::create($input);
        if($href){
            return redirect('web_picture/index');
        }
        else{
            return back();
        }
    }
    public function WebIndex(){
        $href = Web_picture::get();
        return view('web_picture_index',[
            'href'=> $href
        ]);
    }

    public function edit(){
        return view('web_picture_edit');
    }
    public function update(Request $request){
        $input = $request->id;
        $id = Web_picture::where('id',$input);
        $id->delete();
        if($id){
            return redirect('web_picture/index');
        }
        else{
            return back();
        }
 
   public function two(Request $request)
    {
      return response()->json([
          "ret"=>200,
          "desc"=>"success",
          "data"=>[
              "result"=>strrev($request->a)
          ]
      ]);
    }
}
