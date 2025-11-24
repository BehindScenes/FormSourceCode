<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('showLogin');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');

Route::post('/login', [AuthController::class, 'login'])->name('login');
