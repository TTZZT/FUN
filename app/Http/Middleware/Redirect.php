<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Redirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }


    public function handle(Request $request, Closure $next)
    {
        // Log::info('Middleware: User type: ' . ($request->user() ? $request->user()->user_type : 'Not logged in'));
        
        if (!$request->user() || $request->user()->user_type != 1) {
            Log::info('Middleware: Redirecting to welcome page');
            return redirect('/');
        }
        
        // Log::info('Middleware: Proceeding to home page');
        return $next($request);
    }
}
