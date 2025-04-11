<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('welcome');
})->middleware('isAdmin');


Route::prefix('admin')->group(function () {
    Route::view('/register', 'admin.register')->name('admin.register');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register.store');
    Route::view('/login', 'admin.login')->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.store');
    Route::view('/home', 'admin.home')->name('admin.home')->middleware('isAdmin');
});


Route::prefix('aluno')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth');
});
Route::prefix('professor')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth');
});
Route::prefix('diretor')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth');
});
Route::prefix('responsavel')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth');
});


require __DIR__.'/escola.php';