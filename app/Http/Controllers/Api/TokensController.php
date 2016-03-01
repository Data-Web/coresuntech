<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TokenRequest;
use App\AccessToken;
use App\RefreshToken;

class TokensController extends BaseController
{
    public function resfreshAccessToken(TokenRequest $request)
    {
        try {
            AccessToken::whereContent($request->access_token_content)->delete();
            RefreshToken::whereContent($request->refresh_token_content)->delete();
            $accessToken = generateToken();
            $this->createAccessToken($accessToken, $request->user_id, $request->header('device_id'));
            
            return response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Success',
                'accessToken' => $accessToken
            ], 200);
        }

        catch(\Exception $e) {
            return response()->json([
                'code' => 500,
                'error' => true,
                'message' => 'faile'
            ], 500);
        }
    }
}
