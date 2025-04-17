<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::view('register', 'admin.register')->name('admin.register');
    Route::post('register', [AdminController::class, 'register'])->name('admin.register.store');

    Route::view('login', 'admin.login')->name('admin.login');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login.store');

    Route::get('home', [AdminController::class, 'home'])->name('admin.home')->middleware('isAdmin');

    Route::view('escola/register', 'escola.register')->name('escola.register');
    Route::post('escola/register', [EscolaController::class, 'register'])->name('escola.register.store');

    Route::get('escola/gerenciar/{id}', [EscolaController::class, 'escolaEditView'])->name('escola.edit');
    Route::post('escola/gerenciar/{id}', [EscolaController::class, 'escolaEditAction'])->name('escola.edit.action');
    
    Route::get('escola/{id}/diretor/register', [EscolaController::class, 'diretorRegister'])->name('escola.diretor.register');
    Route::post('escola/{id}/diretor/register', [EscolaController::class, 'diretorRegisterAction'])->name('escola.diretor.action');

    Route::get('escola/lista', [EscolaController::class, 'getAll'])->name('escola.lista')->middleware('auth:admin');
    // Route::view('/escola/register', 'escola.register')->name('diretor.register');

    Route::get('/professor/register', [ProfessorController::class, 'register'])->name('professor.register');
    Route::post('/professor/register', [ProfessorController::class, 'store'])->name('professor.register.store');
});

?>