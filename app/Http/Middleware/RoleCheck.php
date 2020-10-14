<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use JWTAuth;
class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$roles)
    {
        if(in_array($request->user()->role, $roles)){
            return $next($request);
        }
        return response()->json([
            'Status' => 307,
            'message' => 'Maaf..! Anda Dilarang Mengakses URL ini'
        ]);
    }
}
