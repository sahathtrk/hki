<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your dokumen screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (auth()->user()->role == "admin") {
            return redirect()->route('admin_dokumen');

        } else if (auth()->user()->role == "pimpinan") {
            return redirect()->route('pimpinan_dokumen');
        } else if (auth()->user()->role == "kepaladepartemen") {
            return redirect()->route('kepaladepartemen_dokumen');
        } else if (auth()->user()->role == "pelayan") {
            return redirect()->route('pelayan_dokumen');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required| email',
            'password' => 'required'
        ]);
        $input = $request->all();

        $credentials = [
            'email' => $input['email'], 
            'password' => $input['password']
        ];

        if (Auth::attempt($credentials)) {
            echo "sukses";
            if (auth()->user()->role == "admin") {
                return redirect()->route('admin_dokumen');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_dokumen');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_dokumen');
            } else if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_dokumen');
            }
        } else {
            echo "eror";
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
