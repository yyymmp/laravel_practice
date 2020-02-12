<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @return string
     */
    public function index(Request $request){
        $id = $request -> get("id",10086);
        return "控制器路由".$id;
    }
}
