<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    //
    public function insert()
    {
        return  DB::table('teachers')->insertGetId([
            "name" => "Christopher ",
            "email" => "chris@gmail.com",
            "age" => 32,
            "role" => "user",
            "address" => "Seoul, South Korea",
        ]);
    }
}
