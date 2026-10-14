<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }
    public function login(Request $r)
    {
        $d = $r->validate(['email' => 'required|email', 'password' => 'required']);
        if (Auth::attempt($d, $r->boolean('remember'))) {
            $r->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
        return back()->withErrors(['email' => 'Incorrect email or password.'])->onlyInput('email');
    }
    public function logout(Request $r)
    {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
        return redirect()->route('login');
    }
}
