<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\Api\AuthRequest;

class AuthController extends BaseController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function login(AuthRequest $request)
    {
        try {
            if (Auth::attempt(['email' => $request->email, 'password'  => $request->password])) {
                $user = Auth::user();
            
                $tokenObject = $this->createAccessToken(generateToken(), $user->id, $request->header('device_id'));
                $deviceInfo = ['id' => $request->header('device_id')];
                
                $tokenInfo = [
                    'expires_at' => convertFormatDate($tokenObject->expires_at),
                    'accessToken' => $tokenObject->content
                ];

                if (isset($user->refreshToken->content) && $user->refreshToken->content != null) {
                    $tokenInfo['refreshToken'] = $user->refreshToken->content;
                } else {
                    $refreshToken = $this->createRefreshToken(generateToken(), $user->id, $request->header('device_id'));
                    $tokenInfo['refreshToken'] = $refreshToken->content;
                }

                return response()->json([
                    'code' => 200,
                    'error' => false,
                    'message' => trans('auth.login_success'),
                    'user' => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'phone' => $user->phone,
                        'profile_photo' => $user->profile_photo,
                        'registering_way' => $user->registering_way,
                        'gender' => $user->gender,
                        'role' => $user->role,
                        'facebook_id' => $user->facebook_id,
                        'facebook_name' => $user->facebook_name,
                        'facebook_page' => $user->facebook_page,
                        'facebook_token' => $user->facebook_token,
                        'google_id' => $user->google_id,
                        'google_token' => $user->google_token,
                        'google_page' => $user->google_page,
                        'ip_address' => $user->ip_address,
                        'country_code' => $user->country_code,
                    ],
                    'token' => $tokenInfo,
                    'device' => $deviceInfo,
                ], 200);
            } else {
                return response()->json([
                    'code' => 401,
                    'error' => true,
                    'message' => trans('auth.login_failed')
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function logout(Request $request)
    {
        try {
            if ($this->deleteAccessToken($request->header('device_id'))) {
                return response()->json([
                    'error' => false,
                    'message' => trans('auth.logout_success'),
                    'code' => 200,
                ], 200);

            } else {
                return response()->json([
                    'error' => true,
                    'message' => trans('auth.logout_failed'),
                    'code' => 401,
                ], 401);
            }
        }
        
        catch(\Exception $e) {
            return response()->json();
        }
    }
}
