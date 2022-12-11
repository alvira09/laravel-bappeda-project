<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectTo(){
        switch(Auth::user()->role){
            case 1:
                $this->redirectTo = '/bappeda';
                return $this->redirectTo;
                break;

            case 2:
                $this->redirectTo = '/kelurahan';
                return $this->redirectTo;
                break;

            case 3:
                $this->redirectTo = '/masyarakat';
                return $this->redirectTo;
                break;

        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username(){
        return 'username';
    }
}
