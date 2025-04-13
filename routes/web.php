<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('welcome');
})->middleware('isAdmin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
require __DIR__.'/admin-rota.php';
require __DIR__.'/aluno-rota.php';
require __DIR__.'/professor-rota.php';
require __DIR__.'/responsavel-rota.php';
require __DIR__.'/escola-rota.php';
require __DIR__.'/diretor-rota.php';