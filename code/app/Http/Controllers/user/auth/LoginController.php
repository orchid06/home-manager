<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function registrationSubmit(Request $request)
    {

        $request->validate([
            'name'     => ['required'],
            'username' => ['required', 'unique:users,username'],
            'email'    => ['required' , 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name'      => $request->input('name'),
            'username'  => $request->input('username'),
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ]);

        Auth::guard('web')->login($user);

        return redirect()->route('user.dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('user.login');
    }
}
