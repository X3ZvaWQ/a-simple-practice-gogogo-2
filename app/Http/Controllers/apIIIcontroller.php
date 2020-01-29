<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apIIIController extends Controller{
    public function home(Request $request)

    {

        return response()->json([

            "ret"=> 200,

            "desc"=> "success",

            "data"=> [
        "result"=> $_POST['a']+$_POST['b']   //这里是拿POST表单来拿到值啊，就是这里不会卡了好久hhhhhh，语法不扎实
         ]
            

        ]);       

    }

}