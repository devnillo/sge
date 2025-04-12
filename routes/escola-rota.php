<?php

use App\Http\Controllers\EscolaController;
use App\Models\Admin;
use App\Models\Escola;
use Illuminate\Support\Facades\Route;

Route::view('/admin/escola/register', 'escola.register')->name('escola.register');
Route::post('/admin/escola/register', [EscolaController::class, 'register'])->name('escola.register.store');

Route::get('/get', function () {
    $escola =  Admin::with('escolas')->get();
    return count($escola[0]->escolas);
})->name('escola.get');
?>