<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //

    public function index(){

        return view('layouts.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>['required','string'],
            'email'=>['required','string'],
            'password'=>['required'],
            'number'=>['required'],

        ]);
        return $request->all();
    }
}
