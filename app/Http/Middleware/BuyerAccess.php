<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BuyerAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check()){
            return redirect()->to('/partner/login');
        }else if(auth()->check() && auth()->user()->role == 'buyer' && auth()->user()->buyer?->status == 'approved'){
            return $next($request);
        }
        abort(404);
    }
}