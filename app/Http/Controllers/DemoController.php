<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('check_age:18');
    }
    public function firstmethod(){

        return "This is First Method of DEmo controller";
    }
    public function user($name){

        return "Hello, $name! This is the user method of the Demo controller.";
    }

}
