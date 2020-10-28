<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'mail' => 'required|string|email',
            'password' => 'required|string'
        ]);
        if (!Auth::attempt($login)) {
            return response(['message' => 'Login Invalide.']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return new UsersResource(Auth::user($accessToken), $accessToken);
    }

    public function logout()
    {
        $accessToken = Auth::user()->token();
        $accessToken->revoke();
        return response('Vous êtes déconnecté', 200);
    }
}
