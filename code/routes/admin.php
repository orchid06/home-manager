<?php

use App\Http\Controllers\admin\auth\LoginController;
use Illuminate\Support\Facades\Route;

//Admin

Route::view('/' , 'admin.auth.login')->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware('admin')->group(function () {
    Route::view('/dashboard' , 'admin.dashboard')->name('dashboard');
});
