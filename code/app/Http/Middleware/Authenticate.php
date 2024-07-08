<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected function redirectTo($request)
    {
        if ($request->route()->name('admin') && ! $request->expectsJson()) {
            return route('admin.login');
        }
        elseif($request->route()->name('user') && ! $request->expectsJson()) {
            return route('user.login');
        }
    }
}
