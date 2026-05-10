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
        // return  DB::table('teachers')->insert([
        //     [
        //             "name" => "Christopher Lee",
        //             "email" => "chris.lee@gmail.com",
        //             "age" => 32,
        //             "role" => "user",
        //             "address" => "Seoul, South Korea",
        //         ],
        //         [
        //             "name" => "Amanda White",
        //             "email" => "amanda.white@yahoo.com",
        //             "age" => 26,
        //             "role" => "moderator",
        //             "address" => "Vancouver, Canada",
        //         ],
        //         [
        //             "name" => "Daniel Garcia",
        //             "email" => "daniel.garcia@outlook.com",
        //             "age" => 38,
        //             "role" => "admin",
        //             "address" => "Mexico City, Mexico",
        //         ],
        //         [
        //             "name" => "Maria Rodriguez",
        //             "email" => "maria.rodriguez@gmail.com",
        //             "age" => 31,
        //             "role" => "user",
        //             "address" => "Barcelona, Spain",
        //         ],
        //         [
        //             "name" => "Kevin Thomas",
        //             "email" => "kevin.thomas@hotmail.com",
        //             "age" => 29,
        //             "role" => "user",
        //             "address" => "Chicago, USA",
        //         ],
        //         [
        //             "name" => "Patricia Moore",
        //             "email" => "patricia.moore@gmail.com",
        //             "age" => 34,
        //             "role" => "moderator",
        //             "address" => "Manchester, UK",
        //         ],
        //         [
        //             "name" => "Brian Jackson",
        //             "email" => "brian.jackson@yahoo.com",
        //             "age" => 41,
        //             "role" => "admin",
        //             "address" => "Houston, USA",
        //         ],
        //         [
        //             "name" => "Nancy Martinez",
        //             "email" => "nancy.martinez@gmail.com",
        //             "age" => 23,
        //             "role" => "user",
        //             "address" => "Lisbon, Portugal",
        //         ],
        //         [
        //             "name" => "George Clark",
        //             "email" => "george.clark@outlook.com",
        //             "age" => 36,
        //             "role" => "user",
        //             "address" => "Vienna, Austria",
        //         ],
        //         [
        //             "name" => "Laura Lewis",
        //             "email" => "laura.lewis@gmail.com",
        //             "age" => 27,
        //             "role" => "moderator",
        //             "address" => "Brussels, Belgium",
        //         ]
        // ]);
    
}
