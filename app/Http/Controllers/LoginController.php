<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        if($auth = Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
        return back()->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
