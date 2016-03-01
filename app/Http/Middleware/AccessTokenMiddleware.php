<?php

namespace App\Http\Middleware;

use Closure;
use App\AccessToken;

class AccessTokenMiddleware
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
        try {
            if ($request->header('access_token') && AccessToken::SearchToken($request->header('access_token'), $request->header('device_id'))->count() > 0) {
                return $next($request);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => trans('auth.access_token_failed'),
                    'code' => 401,
                ], 401);
            }
        }

        catch(\Exception $e) {
            return response()->json([
                'code' => 500,
                'error' => true,
                'message' => trans('messages.server_error')
            ], 500);
        }
    }
}
