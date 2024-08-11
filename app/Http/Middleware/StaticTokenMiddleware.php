<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StaticTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Define your static token
        $staticToken = 'your-static-token-here';

        // Check for the token in the request headers
        if ($request->header('Authorization') !== $staticToken) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
