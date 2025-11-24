<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
    public function login(LoginFormRequest $req)
    {

        $validated = $req->validated();

        $validEmail = 'test@gmail.com';
        $validPassword = '123456789';

        if ($validated['email']  !== $validEmail ||  $validated['password']  !== $validPassword) {
            return back()->withErrors(['Error' => 'Wrong Email/password, please try again.'])->withInput();
        }

        return back()->with('success', 'logged in successfully');
    }
}
