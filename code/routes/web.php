<?php

use App\Http\Controllers\user\auth\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\auth\LoginController;

Route::view('/' , 'user.auth.login');

Route::prefix('user')->name('user.')->group(function(){

    Route::post('/register' , [RegistrationController::class, 'register'] )->name('register');
    Route::post('/login' , [Logincontroller::class, 'authenticate'] )->name('login');

});

Route::middleware(['auth:web'])->prefix('user')->name('.user')->group(function(){
    Route::view('/dashboard' , 'user.dashboard')->name('dashboard');
});

