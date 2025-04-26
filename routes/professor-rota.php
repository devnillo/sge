<?php

use App\Http\Controllers\EscolaController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;

Route::prefix('professor')->group(function () {
    Route::get('/home', function () {
        return view('professor.home');
    })->middleware('auth:professor');
    Route::get('/professor/register', [ProfessorController::class, 'register'])->name('professor.register');
    Route::post('/professor/register', [ProfessorController::class, 'store'])->name('professor.register.store');
    Route::get('login', [ProfessorController::class, 'login'])->name('professor.login');
    Route::post('login', [ProfessorController::class, 'loginAction'])->name('professor.login.action');
});
