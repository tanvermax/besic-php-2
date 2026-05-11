<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function insert()
    {
        return  DB::table('client')->insertGetId([
            "name" => "Christopher ",
            "email" => "chris@gmail.com",
            "age" => 32,
            "role" => "user",
            "address" => "Seoul, South Korea",
        ]);
    }
}
