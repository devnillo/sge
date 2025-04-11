<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

Route::view('/admin/escola/register', 'escola.register')->name('escola.register');
Route::post('/admin/escola/register', [EscolaController::class, 'register'])->name('escola.register.store');