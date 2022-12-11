<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;



class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('bappeda');
        }
        if (Auth::user()->role == 2) {
            return redirect()->route('kelurahan');
        }
        if (Auth::user()->role == 3) {
            return redirect()->route('masyarakat');
        }


    }

}
