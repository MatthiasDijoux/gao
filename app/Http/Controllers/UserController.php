<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(Request $request)
    {
        $user = $request->user();
        $currentUser = User::find($user->id);
        return new UsersResource($currentUser);
    }
}
