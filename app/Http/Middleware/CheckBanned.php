<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBanned
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
        if(Auth::check() && (Auth::user()->status)){
            $banned = Auth::user()->status == '1';
            Auth::logout();

            if($banned == 1){
                $message = 'Your account has been suspended, please contact Admin.';
            }

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')
            ->with('status', $message)
            ->withErrors(['email'=> 'Your account is suspended, please contact Admin.']);
        }

        return $next($request);
    }
}
