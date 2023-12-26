<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_proccess(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->session()->regenerate();

        if (Auth::attempt($credentials) && Auth::user()->role != \null) {

            alert()->success('Anda Berhasil Login');
            return redirect()->intended('dashboard');
        } else {

            Auth::guard('web')->logout();
            alert()->warning('email atau password salah!');
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();
        $request->session()->regenerateToken();

        alert()->success('anda berhasil keluar!');
        return \redirect()->route('login');
    }
}
