<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index($name = "json") {
        dd(111);
        return $name;
    }
}
