<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->route()->named('admin') && !$request->expectsJson()) {
            return redirect()->route('admin.login');
        }
        elseif ($request->route()->named('user') && !$request->expectsJson()) {
            return redirect()->route('user.login');
        }

        return $next($request);
    }
}

