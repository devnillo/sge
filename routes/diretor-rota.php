<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

// Route::prefix('diretor')->group(function () {
//     Route::view('/register/professor', '')->name('diretor.register.professor');
//     Route::post('/register/professor', [EscolaController::class, 'registerProfessor'])->name('diretor.register.professor.store');
// });
Route::prefix('diretor')->group(function () {
    Route::get('/dashboard', function () {
        // return view('admin.dashboard');
    })->middleware('auth');
});
?>