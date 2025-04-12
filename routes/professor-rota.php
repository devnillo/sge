<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

Route::prefix('professor')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth');
});
?>