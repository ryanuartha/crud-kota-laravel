<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;

Route::get('/', function () {
    return redirect()->route('kota.index');
});

Route::resource('kota', KotaController::class)
    ->parameters(['kota' => 'kota']);