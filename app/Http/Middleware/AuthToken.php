<?php

namespace App\Http\Middleware;

use Closure;
use App\RequestToken;

class AuthToken
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
        if ($request->header('token') && RequestToken::SearchToken($request->header('token'),
            $request->header('device_id'))->count() > 0) {
            return $next($request);
        } else {
            return response()->json([
                'error' => true,
                'message' => trans('auth.request_token_failed'),
                'code' => 401,
            ], 401);
        }
    }
}
