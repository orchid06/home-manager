<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\user\auth\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\auth\LoginController;

//Frontend

Route::get('/' , [FrontendController::class,'home'])->name('home');

//User
Route::prefix('user')->name('user.')->group(function(){

    Route::view('/register' , 'user.auth.login' )->name('register');
    Route::view('/login', 'user.auth.login')->name('login');
    Route::post('/auth' , [LoginController::class, 'authenticate'] )->name('autheticate');
});

//Auth User




