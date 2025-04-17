<?php

use App\Http\Controllers\DiretorController;
use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

// Route::prefix('diretor')->group(function () {
//     Route::view('/register/professor', '')->name('diretor.register.professor');
//     Route::post('/register/professor', [EscolaController::class, 'registerProfessor'])->name('diretor.register.professor.store');
// });
Route::prefix('diretor')->group(function () {
    Route::get('/home', [DiretorController::class, 'home'])->name('diretor.home')->middleware('auth:diretor');
    Route::get('/login', [DiretorController::class, 'login'])->name('diretor.login');
    Route::post('/login', [DiretorController::class, 'loginStore'])->name('diretor.login.action');
});

?>