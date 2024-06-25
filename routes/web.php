<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\PortofolioController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::resource('/', MainController::class);



// Route::get('/login', [HomeController::class, 'loginpage']);


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.index');
    });

    Route::resource('portofolio', PortofolioController::class);
    Route::resource('team', TeamController::class);

});