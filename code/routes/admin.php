<?php

use App\Http\Controllers\admin\auth\LoginController;
use Illuminate\Support\Facades\Route;

//Admin
Route::middleware('web')->group(function () {
    Route::view('/' , 'admin.auth.login')->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
});


Route::middleware('web')->group(function () {
    Route::view('/dashboard' , 'admin.dashboard')->name('dashboard');
});
