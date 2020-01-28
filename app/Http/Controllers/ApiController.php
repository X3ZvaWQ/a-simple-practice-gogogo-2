<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // API - 例 的控制器部分
    public function hello (Request $request)
    {
        return $request->ip();
    }
}
