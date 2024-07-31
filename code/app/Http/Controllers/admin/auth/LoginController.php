<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'username'      => ['required'],
            'password'      => ['required'],
        ]);
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt($credentials,$remember_me)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout(Request $request) : \Illuminate\Http\RedirectResponse
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }
}
