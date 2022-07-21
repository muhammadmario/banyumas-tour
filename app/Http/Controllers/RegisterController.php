<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        // validasi request register
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email'=>'required|unique:users|email:dns',
            'role'=>'nullable',
            'password'=> 'required'
        ]);

        // encrypt password
        $validated['password']= Hash::make($validated['password']);

        // buat user
        User::create($validated);
        
        return redirect('/login')->with('success', 'Register telah berhasil');
        
    }
}
