<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\input;

class inputController extends Controller
{
    public function index(Request $request) {
        return response()->view('input');
    }
    public function add(){
        return view('inputadd');
    }
    public function index(){
        $ref = input::get();
        return view('inputIndex',[
            'ref' => $ref
        ]);
    }
    public function show(Request $request){
        $putin = $request -> except('_token');
        $ref = input::create($putin);
        if($ref){
            return redirect('input/index');
        }
        else{
            return back();
        }
        public function dele($id){
            $input = $id;
            $pp = input::where('id',$input);
            $pp->delete();
            if($pp){
                return redirect('input/index');
            }
            else{
                return back();
            }
        }
    }
}
