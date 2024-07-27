<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required'],
            'password' => ['required'],
        ]);
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('web')->attempt($credentials,$remember_me)) {
            $request->session()->regenerate();
            return redirect()->route('user.dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
