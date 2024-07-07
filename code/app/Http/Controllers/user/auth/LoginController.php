<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:6|max:12'
        ]);

        Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
        return view('user.dashboard');
    }
}
