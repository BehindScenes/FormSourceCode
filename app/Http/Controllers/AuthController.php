<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormReq;
use App\Models\ClientsModel;
use Illuminate\Support\Facades\Hash;

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

    public function showRegister() {
        return view('register');
    }
    public function register (RegisterFormReq $req){
        $validated = $req->validated();
        $client = ClientsModel::create([
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);  
        return redirect()->route('showLogin')->with('success', 'created success');      
    }
}
