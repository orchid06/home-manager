<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'username'  => 'required|unique:users,username',
            'password'  => 'required|min:6|max:12'

        ], [
            'username.unique' => 'The username is already taken, choose a diffirent one',
            'email.email'     => 'Choose a valid email',
            'password.min'    => 'Password must be of 6 character long',
            'password.max'    => 'Password cannot exceed 12 characters.'
        ]);

        $user = User::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'username'  => $request->input('username'),
            'password'  => $request->input('password'),

        ]);

        Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);

        return view('user.dashboard');

    }
}
