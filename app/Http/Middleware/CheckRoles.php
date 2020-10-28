<?php

namespace App\Http\Middleware;

use App\Models\RoleModel;
use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user =  $request->user();
        $role = User::find($user->id_role);

        if (!in_array($role->nom, $role)) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
        return $next($request);
    }
}
