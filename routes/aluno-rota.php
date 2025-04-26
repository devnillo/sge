<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

Route::prefix('aluno')->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->middleware('auth');
});
?>