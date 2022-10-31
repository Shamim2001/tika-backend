<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('division-enable-desible/{divition}', [DivisionController::class, 'enableDesible'])->name('division-enable-desible');

    Route::resource('division', DivisionController::class);
    Route::resource('category', CategoryController::class);
});



require __DIR__.'/auth.php';
