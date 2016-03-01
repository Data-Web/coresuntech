<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class AuthRequest extends Request
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
            'email'     => 'required|email|min:5',
            'password'  => 'required|min:6',
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
