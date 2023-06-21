<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function authenticate(Request $request)
    {
        $user = Auth::attempt([
            'username' => $request->username, 
            'password' => $request->password
        ]);

        if ($user) {
            return redirect('/dashboard');
        }else{
            return view('user.login');
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            // 'date_of_birth' => 'date_format:m-d-y|before:today|nullable',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);
        User::create([
            'username' =>$request->username,
            'password' =>Hash::make($request->username),
            'first_name' =>$request->first_name,
            'last_name' =>$request->last_name,
            'email' =>$request->email,
            'date_of_birth' =>$request->date_of_birth,
            'country' =>$request->country,
            'state' =>$request->state,
            'city' =>$request->city,
        ]);

        return redirect('/login');
    }
}
