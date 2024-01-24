<?php

use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'index'])->name('index');
Route::post('/route', [ClientController::class, 'store'])->name('store');

