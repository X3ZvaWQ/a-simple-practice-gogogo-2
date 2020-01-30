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
        "result"=> $_POST['a']+$_POST['b']   //记住了，这是用POST传值拉表单的语法！
         ]
            

        ]);       

    }

}