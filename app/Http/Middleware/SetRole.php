<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SetRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = $request->input('role');

        if ($role === 'Guru') {
            Auth::guard('web')->loginUsingId(1);
        } elseif ($role === 'Siswa') {
            Auth::guard('web')->loginUsingId(2);
        }

        return $next($request);


    }
}
