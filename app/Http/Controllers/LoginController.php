<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        // validasi request login
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // mengarahkan user sesuai role
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            if( auth()->user()->role == 1 ){
                return redirect()->intended('/dashboard');
            }elseif(auth()->user()->role==2){
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Email / Password Salah!');
    }

    public function logout(Request $request)
    {
        // logout
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login ');
    }
}
