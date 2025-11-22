<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route Syntax: Route::method(get,post,put,patch,delete, [ControllerName::class, 'Method inside the controller'])->name('routeName');

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');

Route::post('/login', [AuthController::class, 'login'])->name('login');
