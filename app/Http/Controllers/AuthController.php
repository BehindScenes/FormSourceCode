<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
    public function login(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $validEmail = 'test@gmail.com';
        $validPassword = '123456789';

        if ($validated['email'] !== $validEmail || $validated['password'] !== $validPassword) {
            return back()->withErrors(['Error' => 'Wrong Email/password, please try again.'])->withInput();
        }

        return back()->with('success', 'logged in successfully');
        // return redirect('/dashboard')->with('success', 'logged in successfully');
        // return redirect()->route('routeName')->with('success', 'logged in successfully');
    }
}
