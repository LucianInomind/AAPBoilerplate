<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // $login = $request->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string'
        // ]);

        if (!Auth::attempt($request->all())) {
            return response()->json(['message' => 'Invalid login credentials'], 401);
        };

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response()->json(['user' => Auth::user(), 'access_token' => $accessToken], 200);
    }
}
