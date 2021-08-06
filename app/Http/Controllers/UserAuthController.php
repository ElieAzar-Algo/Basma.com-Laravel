<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserAuthController extends Controller
{
    
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->guard('user_api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->guard('user_api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->guard('user_api')->factory()->getTTL() * 60,
            'user_id'      => auth()->guard('user_api')->id()
        ]);
    }
}
