<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsVerifed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $user =  auth()->user();
        if($user->verifed_at == NULL ){
            return response()->json([
                'status' => false,
                'message'=> 'unverifed' 
            ]);
        }else{
            return $next($request);
        }
    }
}
