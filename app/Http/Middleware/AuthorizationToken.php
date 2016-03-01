<?php

namespace App\Http\Middleware;

use Closure;

class AuthorizationToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if ($request->header('authorization_token') && $request->header('authorization_token') == env('AUTHORIZATION_TOKEN')) {
            return $next($request);
        } else {
            return response()->json([
                'error' => true,
                'message' => trans('auth.authorization_token_failed'),
                'code' => 401,
            ], 401);
        }
    }
}
