<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

Route::prefix('responsavel')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth');
});