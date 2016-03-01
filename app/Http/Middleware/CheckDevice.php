<?php

namespace App\Http\Middleware;

use Closure;

class CheckDevice
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
        if ($request->header('device_id') && $request->header('device_id') != 'null') {
            return $next($request);
        } else {
            return response()->json([
                'error' => true,
                'message' => trans('auth.device_id.empty'),
                'code' => 400,
            ], 400);
        }
    }
}
