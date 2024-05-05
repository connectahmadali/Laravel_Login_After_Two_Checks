<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function autoLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $allowedIPs = ['192.168.1.100', '192.168.1.101', '127.0.0.1'];
            $userIP = $request->ip();

            if (in_array($userIP, $allowedIPs)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard')->with('status', 'Login successful!');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Unauthorized access from this network.');
            }
        }

        return redirect()->back()->with('error', 'Invalid email or password.');
    }
}
