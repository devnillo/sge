<?php

use App\Http\Controllers\EscolaController;
use App\Models\Admin;
use App\Models\Escola;
use Illuminate\Support\Facades\Route;

Route::view('/escola/home', 'escola.home')->name('escola.home');


// Route::get('/get', function () {
//     $escola =  Admin::with('escolas')->get();
//     return count($escola[0]->escolas);
// })->name('escola.get');

?>