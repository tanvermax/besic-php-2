<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //

    public function index()
    {
        $data = "Data";
        // return view('layouts.create');

        // return redirect()->action([ResponseController::class,'another']);
        // return redirect("/another-response");
        // return response($data)->withheader([

        // ]);

        return response()->json([
            'data' => [10, 20, 20]
        ]);
    }

    public function another()
    {
        return response("Hello world");
    }
}
