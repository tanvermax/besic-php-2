<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index()
    {
        // return  DB::table('client')->insertGetId([
        //     "name" => "Christopher ",
        //     "email" => "chris@gmail.com",
        //     "age" => 32,
        //     "role" => "user",
        //     "address" => "Seoul, South Korea",
        // ]);
        $client = Client::create([
            "name" => "John Doe",
            "email" => "john.doe@example.com",
            "age" => 28,
            "phone" => "+1234567890",
            "address" => "123 Main Street, New York, NY 10001",
            "company_name" => "Tech Solutions Inc.",
            "status" => "active"
        ]);



        return $client;
    }


    public function fetch()
    {
        return Client::get()->count();
    }

    public function update()
    {
        // $data = Client::find(1)->update([
        //     "name"=>"Another update"
        // ]);
        $data = Client::find(1)->delete();
        // $data->update([
        //      "name"=>"last update"

        // ]);

        // $data->name= "update Name";
        // $data->save();
        // 
        return $data;
    }

    public function scope()
    {
        return Client::IsAdmin()->get()->count();
    }

    public function delete()
    {
        //    return Client::where('age','>',25)->delete();
        //    return Client::destroy([27,28]);
        //    return Client::truncate(); delete wholedatabase
        // return Client::get()->count();
        // return Client::find(1)->delete();
        // return Client::withTrashed()->get()->count();
        // return Client::onlyTrashed()->get()->count();
        // return Client::withTrashed()->find(1)->restore();
        return Client::find(1)->forceDelete();

    }
}
