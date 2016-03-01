<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class TokenRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'refresh_token_content' => 'required|min:64|exists:refresh_tokens,content',
            'access_token_content'  => 'required|min:64|exists:access_tokens,content',
            'user_id' => 'required|numeric|exists:refresh_tokens,user_id'
        ];
    }
    
    public function response(array $errors)
    {
        return response()->json([
            'code' => 401,
            'error' => true,
            'messages' => $errors
        ], 401);
    }
}
