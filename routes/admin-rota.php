<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::view('/register', 'admin.register')->name('admin.register');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register.store');
    Route::view('/login', 'admin.login')->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.store');
    Route::view('/home', 'admin.home')->name('admin.home')->middleware('isAdmin');
});
?>