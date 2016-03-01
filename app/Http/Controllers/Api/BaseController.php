<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AccessToken;
use App\RefreshToken;
use Carbon\Carbon;

class BaseController extends Controller
{
    protected function createAccessToken($requestToken, $userId, $deviceId)
    {
        return AccessToken::create([
            'content' => $requestToken,
            'user_id' => $userId,
            'device_id' => $deviceId,
            'expires_at' => Carbon::now()->addHours(config('settings.time_expires_token'))
        ]);
    }

    protected function createRefreshToken($refreshToken, $userId, $deviceId)
    {
        return RefreshToken::create([
            'content' => $refreshToken,
            'user_id' => $userId,
            'device_id' => $deviceId,
        ]);
    }

    protected function deleteAccessToken($deviceId)
    {
        return AccessToken::where('device_id', $deviceId)->delete();
    }
}
