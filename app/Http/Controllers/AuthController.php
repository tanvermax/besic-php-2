<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function registration()
    {
        return view('registration');
    }

    public function login()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        //      $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        // ]);
        $credentials['email'] = $request->email;
        $credentials['password'] = $request->password;



        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }
    public function store(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        if ($user) {
            # code...
            return redirect()->route('login');
        }
        return $request;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
